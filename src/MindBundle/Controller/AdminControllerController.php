<?php

namespace MindBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;



class AdminControllerController extends Controller
{
    /**
     * @Route("/admin/index")
     */
    public function indexAction()
    {

    	$em = $this->getDoctrine()->getManager();

        $posts = $em->getRepository('MindBundle:Post')->findAll();
        $products = $em->getRepository('MindBundle:Product')->findAll();      

       // var_dump($posts);
       // var_dump($products);

        return $this->render('MindBundle:AdminController:index.html.twig', array(
            'posts' => $posts,
            'products' => $products,
        ));
    }

}
