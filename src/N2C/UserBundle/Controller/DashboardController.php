<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 14/05/16
 * Time: 17:08
 */

namespace N2C\UserBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    /**
     * @Route("/dashboard")
     */
    public function indexAction(){
        $menu = $this->get('n2c_core.menu_builder')->getNavbarMenu();
        return $this->render('N2CUserBundle:Dashboard:index.html.twig', array('menu'=>$menu));
    }

}