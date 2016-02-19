<?php
/**
 * Created by PhpStorm.
 * User: SuiCune
 * Date: 2016-02-14
 * Time: 15:01
 */

namespace ZaZakretem\GameBundle\Controller;


use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Services\Base\TravelMode;
use Ivory\GoogleMap\Services\Directions\Directions;
use Ivory\GoogleMap\Services\Directions\DirectionsRequest;
use Ivory\GoogleMapBundle\Tests\Fixtures\Model\Map;
use Widop\HttpAdapter\CurlHttpAdapter;
use ZaZakretem\GameBundle\Controller\helpers\BaseController;

class TougeController extends BaseController
{
    public function viewTrackAction($trackId)
    {
        $track = $this->getDoctrine()->getRepository('ZaZakretemModelsBundle:Track')->find($trackId);
        if(empty($track)) {
            throw $this->createNotFoundException();
        }



        $directionsRequest = new DirectionsRequest();
        $directionsRequest->setOrigin($track->getStartLatitude(), $track->getStartLongitude());
        $directionsRequest->setDestination($track->getEndLatitude(), $track->getEndLongitude());
        $directionsRequest->setTravelMode(TravelMode::DRIVING);
        $directions = new Directions(new CurlHttpAdapter());
        $response = $directions->route($directionsRequest);


        $map = new Map();
        $map->setCenter($track->getStartLatitude(), $track->getStartLongitude());
        $map->setAutoZoom(false);
        $map->setMapOption('zoom', 14);
        $map->setMapOption('mapTypeId', MapTypeId::SATELLITE);
        $map->setStylesheetOptions(array(
            'width'  => '100%',
            'height' => '300px',
        ));

        foreach ($response->getRoutes() as $route) {
            $overviewPolyline = $route->getOverviewPolyline();
            $map->addEncodedPolyline($overviewPolyline);
        }

        return $this->render('ZaZakretemGameBundle:Touge:viewTrack.html.twig', array('map'=>$map));
    }

}