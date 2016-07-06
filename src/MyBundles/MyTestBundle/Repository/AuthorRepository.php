<?php
/**
 * Created by PhpStorm.
 * User: carlos.jara
 * Date: 06-07-2016
 * Time: 10:47
 */

namespace MyBundles\MyTestBundle\Repository;

use Doctrine\ORM\EntityRepository;

class AuthorRepository
{

    public function  findTopChefs(){
        return $this->getEntityManager()
            ->createQuery('SELECT a
                           FROM MyTestBundle:Author a
                           JOIN a.recipes r
                           WHERE r.difficulty = :difficulty')
            ->setParameter('difficulty' , 'difícil')
            ->getResult();
    }
}