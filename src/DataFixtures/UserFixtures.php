<?php

namespace App\DataFixtures;

use App\Entity\Address;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $passwordHasher;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }

    // Sample user with address
    public function load(ObjectManager $manager)
    {
        $address = new Address();

        $address->setStreet('main street');
        $address->setHouseNumber('1005');
        $address->setZipCode('1212AA');
        $address->setCity('Chicago');
        $address->setCountry('US');

        $user = new User();

        $user->setFirstName('Eros');
        $user->setLastName('Ramazzotti');
        $user->setUsername('random');
        $user->setPassword($this->passwordHasher->hashPassword($user, 'fake'));
        $user->setEmail('fake@live.com');
        $user->setPhonenumber('9285235324');
        $user->setAddress($address);
        $user->setRoles(['ADMIN']);
        $manager->persist($user);
        $manager->flush();
    }
}
