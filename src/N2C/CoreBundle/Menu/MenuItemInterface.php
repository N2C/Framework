<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 18/05/16
 * Time: 14:49
 */

namespace N2C\CoreBundle\Menu;


interface MenuItemInterface
{
    public function getContent();
    public function setContent($content);

    public function getUri();
    public function setUri($uri);

    public function getType();
    public function setType($type);

    public function getIcon();
    public function setIcon($icon);
    
    public function getChildren();
    public function addChild(MenuItemInterface $children);
    public function removeChild(MenuItemInterface $children);

    public function hasChild();

    public function setParent();
    public function getParent();
}