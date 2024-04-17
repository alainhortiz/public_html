<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setNombre('Administrador');
        $user->setEmail('admin@gmail.com');
        $user->setPassword('Master2015');
        $user->setProvincia('Camaguey');
        $user->setRoles(['ROL_ADMIN']);
        $manager->persist($user);

        $manager->flush();
    }
}
