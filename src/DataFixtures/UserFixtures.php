<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i <= 10; $i++) {
            $user = new User();
            $user->setName('name' . $i);
            $user->setEmail('email' . $i . '@gmail.com');
            $user->setRoles(['ROLE_USER']);
            $user->setPassword('password');

            $manager->persist($user);
        }


        $manager->flush();
    }
}
