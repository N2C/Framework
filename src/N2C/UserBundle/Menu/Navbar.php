<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 13/05/16
 * Time: 21:45
 */

namespace N2C\UserBundle\Menu;



use Knp\Menu\MenuItem;
use N2C\CoreBundle\Menu\NavbarInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class Navbar implements NavbarInterface
{
    private $authorizationChecker;
    public function __construct(AuthorizationCheckerInterface $authorizationChecker)
    {
        $this->authorizationChecker = $authorizationChecker;
    }

    public function getNavbarItems(MenuItem $menuItem){
        $menuItem->addChild('Home', array('uri' => '/'));

        if($this->authorizationChecker->isGranted('IS_AUTHENTICATED_REMEMBERED')){
            $menuItem->addChild('Comments', array('uri' => '#comments'));
        }

    }

}