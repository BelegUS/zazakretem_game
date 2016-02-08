<?php

namespace ZaZakretem\GameBundle\Services;


use Doctrine\ORM\EntityManager;
use ZaZakretem\ModelsBundle\Entity\Part;
use ZaZakretem\ModelsBundle\Entity\PartType;
use ZaZakretem\ModelsBundle\Enums\PartLevels;
use ZaZakretem\ModelsBundle\Enums\PartTypeNames;

class PartProvider
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getPart($partTypeName, $partLevel)
    {
        $partTypeRepository = $this->em->getRepository('ZaZakretemModelsBundle:PartType');
        $partType = $partTypeRepository->findOneByName($partTypeName);  //TODO: Fabric/Builder here - if Aspiration/Drivetrain - another fetching logic

        $partRepository = $this->em->getRepository('ZaZakretemModelsBundle:Part');
        return $partRepository->findOneBy(
            array(
                'type'=>$partType,
                'level'=>$partLevel,
            )
        );
    }
}