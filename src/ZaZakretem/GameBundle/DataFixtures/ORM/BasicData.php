<?php
/**
 * Created by PhpStorm.
 * User: SuiCune
 * Date: 2015-12-21
 * Time: 20:29
 */

namespace ZaZakretem\GameBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Validator\Constraints\DateTime;
use ZaZakretem\ModelsBundle\Entity\Aspiration;
use ZaZakretem\ModelsBundle\Entity\AspirationPart;
use ZaZakretem\ModelsBundle\Entity\Brand;
use ZaZakretem\ModelsBundle\Entity\Car;
use ZaZakretem\ModelsBundle\Entity\Drivetrain;
use ZaZakretem\ModelsBundle\Entity\DrivetrainPart;
use ZaZakretem\ModelsBundle\Entity\Part;
use ZaZakretem\ModelsBundle\Entity\PartType;
use ZaZakretem\ModelsBundle\Entity\Player;
use ZaZakretem\ModelsBundle\Entity\Track;
use ZaZakretem\ModelsBundle\Entity\TrackPartModificator;

class BasicData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {

        $standardPlayer = new Player();
        $standardPlayer->setUsername('BelegUS');
        $standardPlayer->setUsernameCanonical('belegus');
        $standardPlayer->setEmail('belegussuicune@gmail.com');
        $standardPlayer->setEmailCanonical('belegussuicune@gmail.com');
        $standardPlayer->setEnabled(1);
        $standardPlayer->setPassword('1ER/dOIKg6hs0LtRV4yrgEsS4RyzYK3xcNTcpJ3uEtkYNqkIjK5aaC4yylrTmftWWeVIQXbcCMLLvpYmd2E7Hg==');
        $standardPlayer->setLocked(false);
        $standardPlayer->setExpired(false);
        $standardPlayer->setCredentialsExpired(false);
        $standardPlayer->setRoles(array());
        $standardPlayer->setRegistrationDate(new \DateTime());
        $standardPlayer->setMoney(15000);
        $standardPlayer->setSmartness(1);
        $standardPlayer->setComposure(1);
        $standardPlayer->setReflex(1);
        $standardPlayer->setCourage(1);
        $standardPlayer->setXp(0);
        $manager->persist($standardPlayer);

        $ffDrivetrain = new Drivetrain();
        $ffDrivetrain->setDescription('Front Front drivetrain');
        $ffDrivetrain->setName('FF');
        $manager->persist($ffDrivetrain);

        $frDrivetrain = new Drivetrain();
        $frDrivetrain->setDescription('Front Rear drivetrain');
        $frDrivetrain->setName('FR');
        $manager->persist($frDrivetrain);

        $awdDrivetrain = new Drivetrain();
        $awdDrivetrain->setDescription('All Wheel Drive drivetrain');
        $awdDrivetrain->setName('AWD');
        $manager->persist($awdDrivetrain);

        $mrDrivetrain = new Drivetrain();
        $mrDrivetrain->setDescription('Midship Rear drivetrain');
        $mrDrivetrain->setName('MR');
        $manager->persist($mrDrivetrain);

        $rrDrivetrain = new Drivetrain();
        $rrDrivetrain->setDescription('Rear Rear drivetrain');
        $rrDrivetrain->setName('RR');
        $manager->persist($rrDrivetrain);



        $naAspiration = new Aspiration();
        $naAspiration->setDescription('Natural aspiration');
        $naAspiration->setName('NA');
        $manager->persist($naAspiration);

        $turboAspiration = new Aspiration();
        $turboAspiration->setDescription('Turbo aspiration');
        $turboAspiration->setName('Turbo');
        $manager->persist($turboAspiration);

        $twinTurboAspiration = new Aspiration();
        $twinTurboAspiration->setDescription('Twin Turbo aspiration');
        $twinTurboAspiration->setName('TwinTurbo');
        $manager->persist($twinTurboAspiration);

        $superchargerAspiration = new Aspiration();
        $superchargerAspiration->setDescription('Supercharger aspiration');
        $superchargerAspiration->setName('Supercharger');
        $manager->persist($superchargerAspiration);



        $subaruBrand = new Brand();
        $subaruBrand->setName('Subaru');
        $manager->persist($subaruBrand);

        $fordBrand = new Brand();
        $fordBrand->setName('Ford');
        $manager->persist($fordBrand);

        $bmwBrand = new Brand();
        $bmwBrand->setName('BMW');
        $manager->persist($bmwBrand);

        $nissanBrand = new Brand();
        $nissanBrand->setName('Nissan');
        $manager->persist($nissanBrand);



        $brakesPartType = new PartType();
        $brakesPartType->setName('Brakes');
        $brakesPartType->setDescription('Strong and fade-proof brakes are important when going downhill. They improve handling');
        $manager->persist($brakesPartType);

        $stockBrakesPart = new Part();
        $stockBrakesPart->setName('Stock brakes');
        $stockBrakesPart->setDescription('Stock brakes');
        $stockBrakesPart->setType($brakesPartType);
        $manager->persist($stockBrakesPart);


        $suspensionPartType = new PartType();
        $suspensionPartType->setName('Suspension');
        $suspensionPartType->setDescription('Stiff and well-tuned suspension is especially important on twisty roads.');
        $manager->persist($suspensionPartType);

        $stockSuspensionPart = new Part();
        $stockSuspensionPart->setName('Stock suspension');
        $stockSuspensionPart->setDescription('Stock suspension');
        $stockSuspensionPart->setType($suspensionPartType);
        $manager->persist($stockSuspensionPart);

        $aspirationPartType = new PartType();
        $aspirationPartType->setName('Aspiration');
        $aspirationPartType->setDescription('Car\'s aspiration describes how engine gets it\'s air to produce power. Naturally aspirated engines have steady line of power and torque on all RPM\'s. However, boosted engines provide much higher power outputs at various RPM\'s (depending on type of used boost provider), but at the cost of power loss on lower/higher RPM\'s');
        $manager->persist($aspirationPartType);

        $stockNaPart = new Part();
        $stockNaPart->setName('Stock NA');
        $stockNaPart->setDescription('Stock NA aspiration');
        $stockNaPart->setType($aspirationPartType);
        $manager->persist($stockNaPart);
        
        $stockNaAspirationPart = new AspirationPart();
        $stockNaAspirationPart->setAspiration($naAspiration);
        $stockNaAspirationPart->setPart($stockNaPart);
        $manager->persist($stockNaAspirationPart);

        $stockTurboPart = new Part();
        $stockTurboPart->setName('Stock Turbo');
        $stockTurboPart->setDescription('Stock Turbo aspiration');
        $stockTurboPart->setType($aspirationPartType);
        $manager->persist($stockTurboPart);

        $stockTurboAspirationPart = new AspirationPart();
        $stockTurboAspirationPart->setAspiration($turboAspiration);
        $stockTurboAspirationPart->setPart($stockTurboPart);
        $manager->persist($stockTurboAspirationPart);

        $stockTwinTurboPart = new Part();
        $stockTwinTurboPart->setName('Stock TwinTurbo');
        $stockTwinTurboPart->setDescription('Stock TwinTurbo aspiration');
        $stockTwinTurboPart->setType($aspirationPartType);
        $manager->persist($stockTwinTurboPart);

        $stockTwinTurboAspirationPart = new AspirationPart();
        $stockTwinTurboAspirationPart->setAspiration($twinTurboAspiration);
        $stockTwinTurboAspirationPart->setPart($stockTwinTurboPart);
        $manager->persist($stockTwinTurboAspirationPart);

        $stockSuperchargerPart = new Part();
        $stockSuperchargerPart->setName('Stock Supercharger');
        $stockSuperchargerPart->setDescription('Stock Supercharger aspiration');
        $stockSuperchargerPart->setType($aspirationPartType);
        $manager->persist($stockSuperchargerPart);

        $stockSuperchargerAspirationPart = new AspirationPart();
        $stockSuperchargerAspirationPart->setAspiration($superchargerAspiration);
        $stockSuperchargerAspirationPart->setPart($stockSuperchargerPart);
        $manager->persist($stockSuperchargerAspirationPart);

        $drivetrainPartType = new PartType();
        $drivetrainPartType->setName('Drivetrain');
        $drivetrainPartType->setDescription('Car\'s drivetrain layout determines how the car handles, and which driving technique(s) suit best with it. As FF and AWD cars tend to be better with grip, FR is best match for drift. Both MR and RR layouts fit in between those techniques.');
        $manager->persist($drivetrainPartType);

        $ffPart = new Part();
        $ffPart->setName('FF');
        $ffPart->setDescription('FF drivetrain');
        $ffPart->setType($drivetrainPartType);
        $manager->persist($ffPart);

        $ffDrivetrainPart = new DrivetrainPart();
        $ffDrivetrainPart->setPart($ffPart);
        $ffDrivetrainPart->setDrivetrain($ffDrivetrain);
        $manager->persist($ffDrivetrainPart);

        $frPart = new Part();
        $frPart->setName('FR');
        $frPart->setDescription('FR drivetrain');
        $frPart->setType($drivetrainPartType);
        $manager->persist($frPart);

        $frDrivetrainPart = new DrivetrainPart();
        $frDrivetrainPart->setDrivetrain($frDrivetrain);
        $frDrivetrainPart->setPart($frPart);
        $manager->persist($frDrivetrainPart);

        $awdPart = new Part();
        $awdPart->setName('AWD');
        $awdPart->setDescription('AWD drivetrain');
        $awdPart->setType($drivetrainPartType);
        $manager->persist($awdPart);

        $awdDrivetrainPart = new DrivetrainPart();
        $awdDrivetrainPart->setDrivetrain($awdDrivetrain);
        $awdDrivetrainPart->setPart($awdPart);
        $manager->persist($awdDrivetrainPart);

        $mrPart = new Part();
        $mrPart->setName('MR');
        $mrPart->setDescription('MR drivetrain');
        $mrPart->setType($drivetrainPartType);
        $manager->persist($mrPart);

        $mrDrivetrainPart = new DrivetrainPart();
        $mrDrivetrainPart->setDrivetrain($mrDrivetrain);
        $mrDrivetrainPart->setPart($mrPart);
        $manager->persist($mrDrivetrainPart);

        $rrPart = new Part();
        $rrPart->setName('RR');
        $rrPart->setDescription('RR drivetrain');
        $rrPart->setType($drivetrainPartType);
        $manager->persist($rrPart);

        $rrDrivetrainPart = new DrivetrainPart();
        $rrDrivetrainPart->setPart($rrPart);
        $rrDrivetrainPart->setDrivetrain($rrDrivetrain);
        $manager->persist($rrDrivetrainPart);

        $engineTunePartType = new PartType();
        $engineTunePartType->setName('Engine tune');
        $engineTunePartType->setDescription('Engine tune allows getting higher power outputs. Using aftermarket or custom-made parts like exhaust, intake or pistons makes overall engine specification better. Acceleration, top speed and torque all benefit from engine tune.');
        $manager->persist($engineTunePartType);

        $stockEngineTunePart = new Part();
        $stockEngineTunePart->setName('Stock engine tune');
        $stockEngineTunePart->setDescription('Stock engine tune');
        $stockEngineTunePart->setType($engineTunePartType);
        $manager->persist($stockEngineTunePart);

        $massReductionPartType = new PartType();
        $massReductionPartType->setName('Mass reduction');
        $massReductionPartType->setDescription('Mass reduction is all about lowering the car\'s weight. As Colin Chapman once said, powerful cars are fast at straights, but light cars are fast everywhere. Reducing mass increases acceleration, improves handling and reduces tyre wear and brake fading, especially on downhill, twisty courses');
        $manager->persist($massReductionPartType);

        $stockMassReductionPart = new Part();
        $stockMassReductionPart->setName('No mass reduction');
        $stockMassReductionPart->setDescription('No mass reduction');
        $stockMassReductionPart->setType($massReductionPartType);
        $manager->persist($stockMassReductionPart);

        $sierraCar = new Car();
        $sierraCar->setAcceleration(9.1);
        $sierraCar->setAspiration($naAspiration);
        $sierraCar->setBrand($fordBrand);
        $sierraCar->setDisplacement(2000);
        $sierraCar->setDrivetrain($frDrivetrain);
        $sierraCar->setHandling(60);
        $sierraCar->setHorsepower(125);
        $sierraCar->setMass(1200);
        $sierraCar->setModel('Sierra');
        $sierraCar->setModelYear(1992);
        $sierraCar->setPrice(3000);
        $sierraCar->setTorque(174);
        $sierraCar->setVmax(190);
        $manager->persist($sierraCar);

        $imprezaGcNaCar = new Car();
        $imprezaGcNaCar->setAcceleration(9);
        $imprezaGcNaCar->setAspiration($naAspiration);
        $imprezaGcNaCar->setBrand($subaruBrand);
        $imprezaGcNaCar->setDisplacement(2000);
        $imprezaGcNaCar->setDrivetrain($awdDrivetrain);
        $imprezaGcNaCar->setHandling(70);
        $imprezaGcNaCar->setHorsepower(115);
        $imprezaGcNaCar->setMass(1250);
        $imprezaGcNaCar->setModel('Impreza GC');
        $imprezaGcNaCar->setModelYear(1997);
        $imprezaGcNaCar->setPrice(6000);
        $imprezaGcNaCar->setTorque(170);
        $imprezaGcNaCar->setVmax(180);
        $manager->persist($imprezaGcNaCar);

        $svxCar = new Car();
        $svxCar->setAcceleration(8.6);
        $svxCar->setAspiration($naAspiration);
        $svxCar->setBrand($subaruBrand);
        $svxCar->setDisplacement(3300);
        $svxCar->setDrivetrain($awdDrivetrain);
        $svxCar->setHandling(75);
        $svxCar->setHorsepower(220);
        $svxCar->setMass(1650);
        $svxCar->setModel('SVX');
        $svxCar->setModelYear(1996);
        $svxCar->setPrice(12000);
        $svxCar->setTorque(309);
        $svxCar->setVmax(235);
        $manager->persist($svxCar);

        $skylineBNR32Car = new Car();
        $skylineBNR32Car->setAcceleration(5.6);
        $skylineBNR32Car->setAspiration($twinTurboAspiration);
        $skylineBNR32Car->setBrand($nissanBrand);
        $skylineBNR32Car->setDisplacement(2600);
        $skylineBNR32Car->setDrivetrain($awdDrivetrain);
        $skylineBNR32Car->setHandling(80);
        $skylineBNR32Car->setHorsepower(300);
        $skylineBNR32Car->setMass(1500);
        $skylineBNR32Car->setModel('Skyline R32 GT-R');
        $skylineBNR32Car->setModelYear(1992);
        $skylineBNR32Car->setPrice(130000);
        $skylineBNR32Car->setTorque(380);
        $skylineBNR32Car->setVmax(260);
        $manager->persist($svxCar);



        $serpentynyDownhill = new Track();
        $serpentynyDownhill->setName('Serpentyny - Downhill');
        $serpentynyDownhill->setDescription('Race downhill through Serpentyny touge');
        $serpentynyDownhill->setStartCoordinatesJson(json_encode(array('lat'=>49.604831, 'lon'=>18.902182)));
        $serpentynyDownhill->setEndCoordinatesJson(json_encode(array('lat'=>49.611698, 'lon'=>18.889969)));
        $manager->persist($serpentynyDownhill);

        $serpentynyAspirationModificator = new TrackPartModificator();
        $serpentynyAspirationModificator->setModificator(2);
        $serpentynyAspirationModificator->setTrack($serpentynyDownhill);
        $serpentynyAspirationModificator->setPartType($aspirationPartType);
        $serpentynyAspirationModificator->setExpectedLayout($turboAspiration);
        $manager->persist($serpentynyAspirationModificator);



        $manager->flush();

    }
}