<?php

namespace Dan\MainBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("") 
 */
class DefaultController extends Controller
{
    /**
     * Home page
     * 
     * @Route("/", name="home")
     * @return html
     */
    public function indexAction()
    {
        return $this->render('DanMainBundle:Default:index.html.twig', array('name' => 'Dan'));
    }
}
