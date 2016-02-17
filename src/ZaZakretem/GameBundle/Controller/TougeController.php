<?php
/**
 * Created by PhpStorm.
 * User: SuiCune
 * Date: 2016-02-14
 * Time: 15:01
 */

namespace ZaZakretem\GameBundle\Controller;


use ZaZakretem\GameBundle\Controller\helpers\BaseController;

class TougeController extends BaseController
{
    public function viewTrackAction($trackId)
    {
        $track = $this->getDoctrine()->getRepository('ZaZakretemModelsBundle:Track')->find($trackId);
        if(empty($track)) {
            throw $this->createNotFoundException();
        }
        //TODO: Rival generator needed
    }

}