<?php

namespace MindBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class FrontControllerController extends Controller
{
    /**
     * @Route("/index")
     */
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('MindBundle:Post')->findAll();
        $products = $em->getRepository('MindBundle:Product')->findAll();      

        $howmany_posts = count($posts);
        $howmany_products = count($products);
       // var_dump($posts);
       // var_dump($products);
        return $this->render('MindBundle:FrontController:index.html.twig', array(
            'posts' => $posts,
            'products' => $products,
            'howmany_products' => $howmany_products,
            'howmany_posts' => $howmany_posts,
        ));
    }

}
