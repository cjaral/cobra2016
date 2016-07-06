<?php

namespace MyBundles\MyTestBundle\Controller;

use MyBundles\MyTestBundle\Entity\Author;
use MyBundles\MyTestBundle\Entity\Ingredient;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyBundles\MyTestBundle\Entity\Recipe;
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


    /*public function createAction(){
        $recipe=new Recipe();
        $recipe->setName('Pollo al pil-pil');
        $recipe->setDifficulty('fácil');
        $recipe->setDescription('descripción de Pollo al pil-pil');

        $em=$this->getDoctrine()->getManager();
        $em->persist($recipe);
        $em->flush();

        return new Response('Creada con id '.$recipe->getId());
    }*/

    /*public function createAction(){
        $em=$this->getDoctrine()->getEntityManager();

        $author=new Author('Carlos','Jara');
        $em->persist($author);

        $ingredient=new Ingredient('Pollo');
        $em->persist($ingredient);

        $recipe=new Recipe($author,'Pollo al pil-pil','Deliciosa y económica receta','fácil');
        $em->persist($recipe);

        $recipe->add($ingredient);

        $em->flush();

        //return $this->redirect($this->generateUrl('my_recipe_show',array('id'=>$recipe->getId())));

        return new Response($recipe->getName()."</br>Por: ".$recipe->getAuthor());
    }*/


    public function createAction(){
        //$em=$this->getDoctrine()->getEntityManager();

        $author=new Author('Carlos','Jara');
        //$em->persist($author);

        $ingredient=new Ingredient('Pollo');
        //$em->persist($ingredient);

        $recipe=new Recipe($author,'Pollo al pil-pil','Deliciosa y económica receta','fácil');
        //$em->persist($recipe);

        $recipe->add($ingredient);

        //$em->flush();

        $this->persistAndFlush($recipe);

        //return $this->redirect($this->generateUrl('my_recipe_show',array('id'=>$recipe->getId())));

        return new Response($recipe->getName()."</br>Por: ".$author->getName()." ".$author->getSurname()."</br>".$recipe->getDescription());
    }


    public function showAction($id){
        $repository=$this->getDoctrine()->getRepository('MyTestBundle:Recipe');
        $recipe=$repository->find($id);

        //para recuperar todos los elementos
        //$repository->findAll();

        //con criterios de filtrado y ordenación
        //$repository->findBy(array('difficulty'=>'fácil'));
    }


    public function topChefsAction(){
        $repository=$this->getDoctrine()->getRepository('MyTestBundle:Author');
        $chefs=$repository->findTopChefs();
        return array('chefs'=>$chefs);
    }


    private function persistAndFlush(Recipe $recipe){
        $em=$this->getDoctrine()->getEntityManager();
        $em->persist($recipe);
        $em->flush();
    }


}
