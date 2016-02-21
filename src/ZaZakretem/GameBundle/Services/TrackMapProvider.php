<?php
/**
 * Created by PhpStorm.
 * User: SuiCune
 * Date: 2016-02-20
 * Time: 13:50
 */

namespace ZaZakretem\GameBundle\Services;


use Ivory\GoogleMap\Controls\MapTypeControlStyle;
use Ivory\GoogleMap\Map;
use Ivory\GoogleMap\MapTypeId;
use Ivory\GoogleMap\Services\Base\TravelMode;
use Ivory\GoogleMap\Services\Directions\Directions;
use Ivory\GoogleMap\Services\Directions\DirectionsRequest;
use Widop\HttpAdapter\CurlHttpAdapter;
use ZaZakretem\ModelsBundle\Entity\Track;

class TrackMapProvider
{
    /**
     * Provides map for specified Track
     * @param Track $track
     * @throws \Ivory\GoogleMap\Exception\DirectionsException
     * @throws \Ivory\GoogleMap\Exception\MapException
     * @return Map
     */
    public function getMap($track)
    {
        $directionsRequest = new DirectionsRequest();
        $directionsRequest->setOrigin($track->getStartLatitude(), $track->getStartLongitude());
        $directionsRequest->setDestination($track->getEndLatitude(), $track->getEndLongitude());
        $directionsRequest->setTravelMode(TravelMode::DRIVING);
        $directions = new Directions(new CurlHttpAdapter());
        $response = $directions->route($directionsRequest);


        $map = new Map();
        $map->setCenter((double)($track->getStartLatitude()+$track->getEndLatitude())/2, (double)($track->getStartLongitude()+$track->getEndLongitude())/2);
        $map->setAutoZoom(false);
        $map->setMapOption('zoom', 14);
        $map->setMapOption('mapTypeId', MapTypeId::SATELLITE);
        $map->setMapOption('disableDefaultUI', true);
        $map->setMapOption('draggable',false);
        $map->setMapOption('scrollwheel', false);
        $map->setStylesheetOptions(array(
            'width'  => '100%',
            'height' => '300px',
        ));

        foreach ($response->getRoutes() as $route) {
            $overviewPolyline = $route->getOverviewPolyline();
            $map->addEncodedPolyline($overviewPolyline);
        }

        return $map;
    }
}