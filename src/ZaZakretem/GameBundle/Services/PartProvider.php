<?php

namespace ZaZakretem\GameBundle\Services;


use Doctrine\ORM\EntityManager;

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
        $partType = $partTypeRepository->findOneByName($partTypeName);

        $partRepository = $this->em->getRepository('ZaZakretemModelsBundle:Part');
        return $partRepository->findOneBy(
            array(
                'type'=>$partType,
                'level'=>$partLevel,
            )
        );
    }

    /**
     * @param $aspiration
     * @param $partLevel
     * @return \ZaZakretem\ModelsBundle\Entity\AspirationPart
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getAspirationPart($aspiration, $partLevel)
    {
        $partTypeRepository = $this->em->getRepository('ZaZakretemModelsBundle:PartType');
        $partType = $partTypeRepository->findOneByName('Aspiration');

        return $this->em->createQueryBuilder()
            ->select('ap')
            ->from('ZaZakretem\ModelsBundle\Entity\AspirationPart', 'ap')
            ->join('ap.aspiration', 'a')
            ->join('ap.part', 'p', 'ap.part = p')
            ->where('ap.aspiration = :aspiration AND p.level = :level AND p.type = :type')
            ->setParameters(array(
                ':aspiration'=>$aspiration,
                ':level'=>$partLevel,
                ':type'=>$partType,
            ))
            ->getQuery()->getSingleResult();
    }

    /**
     * @param $drivetrain
     * @param $partLevel
     * @return \ZaZakretem\ModelsBundle\Entity\DrivetrainPart
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getDrivetrainPart($drivetrain, $partLevel)
    {
        $partTypeRepository = $this->em->getRepository('ZaZakretemModelsBundle:PartType');
        $partType = $partTypeRepository->findOneByName('Drivetrain');

        return $this->em->createQueryBuilder()
            ->select('dp')
            ->from('ZaZakretem\ModelsBundle\Entity\DrivetrainPart', 'dp')
            ->join('dp.drivetrain', 'd')
            ->join('dp.part', 'p', 'dp.part = p')
            ->where('dp.drivetrain = :drivetrain AND p.level = :level AND p.type = :type')
            ->setParameters(array(
                ':drivetrain'=>$drivetrain,
                ':level'=>$partLevel,
                ':type'=>$partType,
            ))
            ->getQuery()->getSingleResult();
    }
}