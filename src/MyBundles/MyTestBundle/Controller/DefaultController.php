<?php

namespace MyBundles\MyTestBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('MyBundlesMyTestBundle:Default:index.html.twig');
    }

    public function testAction($id)
    {
        //return $this->render('MyBundlesMyTestBundle:Default:index.html.twig');
        return new Response("llegue a mi response con id: ".$id);
    }
}
