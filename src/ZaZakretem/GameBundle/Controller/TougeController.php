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
        $player = $this->getUser();
        $track = $this->getDoctrine()->getRepository('ZaZakretemModelsBundle:Track')->find($trackId);
        if(empty($track)) {
            throw $this->createNotFoundException();
        }

        $trackMapProvider = $this->get('track_map_provider');
        $map = $trackMapProvider->getMap($track);

        $opponentsProvider = $this->get('opponent_provider');
        $opponents = $opponentsProvider->getOpponents($track, $player);

        return $this->render('ZaZakretemGameBundle:Touge:viewTrack.html.twig', array('map'=>$map, 'opponents'=>$opponents));
    }

    public function challengeOpponentAction()
    {

    }

}