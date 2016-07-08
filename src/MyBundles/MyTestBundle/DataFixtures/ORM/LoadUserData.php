<?php
/**
 * Created by PhpStorm.
 * User: carlos.jara
 * Date: 07-07-2016
 * Time: 17:11
 */

namespace MyBundles\MyTestBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use MyBundles\MyTestBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    public function load(ObjectManager $manager){
        $userAdmin=new User();
        $userAdmin->setUserName('admin');
        $userAdmin->setPassword('123');
        $userAdmin->setName('carlos');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}