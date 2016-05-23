<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 13/05/16
 * Time: 21:45
 */

namespace N2C\UserBundle\Menu;




use N2C\CoreBundle\Menu\MenuItem;
use N2C\CoreBundle\Menu\MenuInterface;
use Symfony\Component\Routing\Router;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;

class MenuBuilder implements MenuInterface
{
    private $authorizationChecker;
    private $router;

    public function __construct(AuthorizationCheckerInterface $authorizationChecker, Router $router)
    {
        $this->router = $router;
        $this->authorizationChecker = $authorizationChecker;
    }

    public function getNavbarItems(MenuItem $menu){
        if($this->authorizationChecker->isGranted('IS_AUTHENTICATED_REMEMBERED')){
            $menu->addChild((new MenuItem()))
                ->setType('link')
                ->setContent('dashboard')
                ->setUri($this->router->generate('n2c_user_dashboard_index'))
                ->setIcon('fa fa-home')
                ->getParent();
        }

    }

    public function getTopBarItems(MenuItem $menu)
    {
        // TODO: Implement getTopBarItems() method.
    }

}