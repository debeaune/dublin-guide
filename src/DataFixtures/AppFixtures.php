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

        $gastronomie = new Categorie();
        $gastronomie->setNom('Gastronomie');
        $manager->persist($gastronomie);

        $pub = new Categorie();
        $pub->setNom('Pub & Nightlife');
        $manager->persist($pub);

        $shopping = new Categorie();
        $shopping->setNom('Shopping');
        $manager->persist($shopping);

        $lieu1 = new Lieu();
        $lieu1->setNom('Trinity College');
        $lieu1->setDescription('La plus ancienne université d\'Irlande, fondée en 1592. Abritant le célèbre Book of Kells.');
        $lieu1->setAddresse('College Green, Dublin 2');
        $lieu1->setLatitude(53.3438);
        $lieu1->setLongitude(-6.2546);
        $lieu1->setCategorie($culture);
        $lieu1->setPhoto('trinity.jpg');
        $manager->persist($lieu1);

        $lieu2 = new Lieu();
        $lieu2->setNom('Kilmainham Gaol');
        $lieu2->setDescription('Ancienne prison emblématique, symbole de la lutte pour l\'indépendance irlandaise.');
        $lieu2->setAddresse('Inchicore Rd, Kilmainham, Dublin 8');
        $lieu2->setLatitude(53.3418);
        $lieu2->setLongitude(-6.3097);
        $lieu2->setCategorie($culture);
        $lieu2->setPhoto('kilmainham.jpg');
        $manager->persist($lieu2);

        $lieu3 = new Lieu();
        $lieu3->setNom('Chester Beatty Library');
        $lieu3->setDescription('Musée gratuit abritant une collection exceptionnelle de manuscrits et d\'art du monde entier.');
        $lieu3->setAddresse('Dublin Castle, Dublin 2');
        $lieu3->setLatitude(53.3425);
        $lieu3->setLongitude(-6.2677);
        $lieu3->setCategorie($culture);
        $lieu3->setPhoto('chester_beatty.jpg');
        $manager->persist($lieu3);

        $lieu4 = new Lieu();
        $lieu4->setNom('Musée National d\'Irlande');
        $lieu4->setDescription('Musée gratuit retraçant l\'histoire et l\'archéologie irlandaise, avec des trésors celtes.');
        $lieu4->setAddresse('Kildare St, Dublin 2');
        $lieu4->setLatitude(53.3401);
        $lieu4->setLongitude(-6.2531);
        $lieu4->setCategorie($culture);
        $lieu4->setPhoto('national_museum.jpg');
        $manager->persist($lieu4);

        $lieu5 = new Lieu();
        $lieu5->setNom('St Patrick\'s Cathedral');
        $lieu5->setDescription('La plus grande cathédrale d\'Irlande, datant du XIIe siècle.');
        $lieu5->setAddresse('St Patrick\'s Close, Dublin 8');
        $lieu5->setLatitude(53.3393);
        $lieu5->setLongitude(-6.2694);
        $lieu5->setCategorie($culture);
        $lieu5->setPhoto('st_patricks.jpg');
        $manager->persist($lieu5);

        $lieu6 = new Lieu();
        $lieu6->setNom('Phoenix Park');
        $lieu6->setDescription('L\'un des plus grands parcs urbains d\'Europe, avec des cerfs en liberté.');
        $lieu6->setAddresse('Phoenix Park, Dublin 8');
        $lieu6->setLatitude(53.3601);
        $lieu6->setLongitude(-6.3267);
        $lieu6->setCategorie($nature);
        $lieu6->setPhoto('phoenix.jpg');
        $manager->persist($lieu6);

        $lieu7 = new Lieu();
        $lieu7->setNom('Howth Head');
        $lieu7->setDescription('Magnifique falaise au nord de Dublin avec des sentiers de randonnée et une vue imprenable sur la baie.');
        $lieu7->setAddresse('Howth, Co. Dublin');
        $lieu7->setLatitude(53.3862);
        $lieu7->setLongitude(-6.0653);
        $lieu7->setCategorie($nature);
        $lieu7->setPhoto('howth.jpg');
        $manager->persist($lieu7);

        $lieu8 = new Lieu();
        $lieu8->setNom('St Stephen\'s Green');
        $lieu8->setDescription('Parc au coeur de Dublin, idéal pour une pause déjeuner au milieu de la ville.');
        $lieu8->setAddresse('St Stephen\'s Green, Dublin 2');
        $lieu8->setLatitude(53.3382);
        $lieu8->setLongitude(-6.2591);
        $lieu8->setCategorie($nature);
        $lieu8->setPhoto('stephens_green.jpg');
        $manager->persist($lieu8);

        $lieu9 = new Lieu();
        $lieu9->setNom('Bunsen Burger');
        $lieu9->setDescription('Le meilleur burger de Dublin selon les Dublinois eux-mêmes. Simple, efficace, délicieux.');
        $lieu9->setAddresse('36 Wexford St, Dublin 2');
        $lieu9->setLatitude(53.3339);
        $lieu9->setLongitude(-6.2641);
        $lieu9->setCategorie($gastronomie);
        $lieu9->setPhoto('bunsen.jpg');
        $manager->persist($lieu9);

        $lieu10 = new Lieu();
        $lieu10->setNom('Gallagher\'s Boxty House');
        $lieu10->setDescription('Restaurant traditionnel irlandais dans Temple Bar, spécialisé dans le boxty.');
        $lieu10->setAddresse('20-21 Temple Bar, Dublin 2');
        $lieu10->setLatitude(53.3455);
        $lieu10->setLongitude(-6.2643);
        $lieu10->setCategorie($gastronomie);
        $lieu10->setPhoto('boxty_house.jpg');
        $manager->persist($lieu10);

        $lieu11 = new Lieu();
        $lieu11->setNom('The Brazen Head');
        $lieu11->setDescription('Le plus vieux pub d\'Irlande, fondé en 1198. Musique live irlandaise tous les soirs.');
        $lieu11->setAddresse('20 Lower Bridge St, Dublin 8');
        $lieu11->setLatitude(53.3450);
        $lieu11->setLongitude(-6.2757);
        $lieu11->setCategorie($pub);
        $lieu11->setPhoto('brazen_head.jpg');
        $manager->persist($lieu11);

        $lieu12 = new Lieu();
        $lieu12->setNom('Mulligan\'s');
        $lieu12->setDescription('Institution dublinoise depuis 1782, réputé pour servir la meilleure Guinness de la ville.');
        $lieu12->setAddresse('8 Poolbeg St, Dublin 2');
        $lieu12->setLatitude(53.3461);
        $lieu12->setLongitude(-6.2523);
        $lieu12->setCategorie($pub);
        $lieu12->setPhoto('mulligans.jpg');
        $manager->persist($lieu12);

        $lieu13 = new Lieu();
        $lieu13->setNom('Grafton Street');
        $lieu13->setDescription('La rue commerçante piétonne principale de Dublin, animée de musiciens de rue.');
        $lieu13->setAddresse('Grafton St, Dublin 2');
        $lieu13->setLatitude(53.3408);
        $lieu13->setLongitude(-6.2596);
        $lieu13->setCategorie($shopping);
        $lieu13->setPhoto('grafton.jpg');
        $manager->persist($lieu13);

        $lieu14 = new Lieu();
        $lieu14->setNom('George\'s Street Arcade');
        $lieu14->setDescription('Le plus vieux marché couvert d\'Irlande — vintage, créateurs locaux, bouquinistes.');
        $lieu14->setAddresse('South Great George\'s St, Dublin 2');
        $lieu14->setLatitude(53.3415);
        $lieu14->setLongitude(-6.2635);
        $lieu14->setCategorie($shopping);
        $lieu14->setPhoto('georges_arcade.jpg');
        $manager->persist($lieu14);

        $manager->flush();
    }
}