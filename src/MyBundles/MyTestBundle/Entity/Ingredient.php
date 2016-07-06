<?php
/**
 * Created by PhpStorm.
 * User: carlos.jara
 * Date: 01-07-2016
 * Time: 16:48
 */

namespace MyBundles\MyTestBundle\Entity;


class Ingredient
{
    private $id;
    protected $name;


    public function __construct($name){
        $this->name=$name;
    }
}