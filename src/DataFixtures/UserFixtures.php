<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('user1@digi.com');
        $user->setPassword('passe');
        $user->setRoles('ROLE_ADMIN');

        $manager->persist($user);
        $manager->flush();
    }
}
