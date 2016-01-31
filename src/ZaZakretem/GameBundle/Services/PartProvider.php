<?php

namespace ZaZakretem\GameBundle\Services;


use Doctrine\ORM\EntityManager;
use ZaZakretem\ModelsBundle\Entity\Part;
use ZaZakretem\ModelsBundle\Enums\PartLevel;
use ZaZakretem\ModelsBundle\Enums\PartTypeName;

class PartProvider
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function getPart($partTypeName, $partLevel)
    {
        $partTypeRepository = $this->em->getRepository(\ZaZakretem\ModelsBundle\Entity\PartType::class);
        $partType = $partTypeRepository->findOneByName($partTypeName);

        $partRepository = $this->em->getRepository(Part::class);
        return $partRepository->findOneBy(
            array(
                'type'=>$partType,
                'level'=>$partLevel,
            )
        );
    }
}