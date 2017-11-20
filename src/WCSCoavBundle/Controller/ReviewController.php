<?php

namespace WCSCoavBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

class ReviewController extends Controller
{
    /**
     * @Route("/review", name="review_index")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $reviews = $em->getRepository('WCSCoavBundle:Review')->findAll();

        return $this->render('WCSCoavBundle:Review:index.html.twig', array(
            'reviews' => $reviews
        ));
    }

    /**
     * @Route("/review/new", name="review_new")
     * @Method({"GET", "POST"})
     */
    public function newAction()
    {
        return $this->render('WCSCoavBundle:Review:new.html.twig', array(
            // ...
        ));
    }

}
