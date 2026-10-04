<?php

namespace App\DataFixtures;

use App\Entity\Categorie;
use App\Entity\Lieu;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $culture = new Categorie();
        $culture->setNom('Culture');
        $manager->persist($culture);

        $nature = new Categorie();
        $nature->setNom('Nature');
        $manager->persist($nature);

        $lieu1 = new Lieu();
        $lieu1->setNom('Trinity College');
        $lieu1->setDescription('La plus ancienne université d\'Irlande, fondée en 1592.');
        $lieu1->setAddresse('College Green, Dublin 2');
        $lieu1->setLatitude(53.3438);
        $lieu1->setLongitude(-6.2546);
        $lieu1->setCategorie($culture);
        $lieu1->setPhoto('trinity.jpg');
        $manager->persist($lieu1);

        $lieu2 = new Lieu();
        $lieu2->setNom('Phoenix Park');
        $lieu2->setDescription('L\'un des plus grands parcs urbains d\'Europe.');
        $lieu2->setAddresse('Phoenix Park, Dublin 8');
        $lieu2->setLatitude(53.3601);
        $lieu2->setLongitude(-6.3267);
        $lieu2->setCategorie($nature);
        $lieu2->setPhoto('phoenix.jpg');
        $manager->persist($lieu2);

        $manager->flush();
    }
}
