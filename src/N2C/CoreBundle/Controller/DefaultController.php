<?php

namespace N2C\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        $menu = $this->get('n2c_core.menu_builder')->getNavbarMenu();
        return $this->render('N2CCoreBundle:Default:index.html.twig', array('menu'=>$menu));
    }
}
