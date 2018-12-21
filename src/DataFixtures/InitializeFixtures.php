<?php

namespace App\DataFixtures;

use App\Entity\Aplicacion;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class InitializeFixtures extends Fixture
{

    /** @var \Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface */
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
       // $app = new Aplicacion();
        //$app->setNombre('videoProject');
        //$manager->persist($app);

        $user = new User();
        $user->setName('admin');
        $user->setUsername('admin');
        $user->setEmail('admin@admin.com');
        $user->setPassword($this->encoder->encodePassword($user, 'admin'));
        $user->setRoles([User::ROLE_ROOT]);
       // $user->setActive(true);
        $manager->persist($user);

        $manager->flush();
    }
}
