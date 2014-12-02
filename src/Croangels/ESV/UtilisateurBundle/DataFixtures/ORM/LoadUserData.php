<?php
namespace Croangels\ESV\UtilisateurBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Croangels\ESV\UtilisateurBundle\Entity\Utilisateur;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $array = array
        (
          array
          (
            "username"  => "admin1",
            "password"  => "admin1",
            "email"     => "admin1@admin.fr",
            "nom"       => "admin 1",
            "prenom"    => "admin 1",
            "actif"     => true,
            "isAdmin"   => true
          ),
          array
          (
          "username"  => "admin2",
          "password"  => "admin2",
          "email"     => "admin2@admin.fr",
          "nom"       => "admin 2",
          "prenom"    => "admin 2",
          "actif"     => true,
          "isAdmin"   => true
          ),
          array
          (
          "username"  => "client1",
          "password"  => "client1",
          "email"     => "client1@client.fr",
          "nom"       => "client1",
          "prenom"    => "client1",
          "actif"     => true,
          "isAdmin"   => true
          ),
          array
          (
          "username"  => "client2",
          "password"  => "client2",
          "email"     => "client2@client.fr",
          "nom"       => "client2",
          "prenom"    => "client2",
          "actif"     => true,
          "isAdmin"   => true
          ),
        );


        foreach($array as $row)
        {
          $userAdmin = new Utilisateur();
          $userAdmin->setUsername($row['username']);
          $userAdmin->setPassword($row['password']);
          $userAdmin->setEmail($row['email']);
          $userAdmin->setPrenom($row['nom']);
          $userAdmin->setNom($row['prenom']);
          $userAdmin->setEnabled($row['actif']);
          $userAdmin->setSuperAdmin($row['isAdmin']);
          $manager->persist($userAdmin);
        }

        $manager->flush();
    }
}
