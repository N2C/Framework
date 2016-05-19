<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 18/05/16
 * Time: 15:02
 */

namespace N2C\CoreBundle\Menu;


class MenuItem
{
    protected $content = "";

    protected $action = "";

    protected $uri ="";

    protected $type ="";

    protected $children=array();

    protected $parent;




    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param string $action
     */
    public function setAction($action)
    {
        $this->action = $action;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     */
    public function setUri($uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }


    public function getChildren()
    {
        return $this->children;
    }

    public function setChildren(array $children){
        $this->children = $children;
    }

    public function addChild(MenuItem $child)
    {
        if(!empty($child-$this->getParent())){
            throw new \InvalidArgumentException('Child passed to addChild must have any parent');
        }
        
        $this->children[] = $child;
        $child->setParent($this);
        return $child;
    }

    public function removeChildren(MenuItem $children)
    {
        return (in_array($children, $this->children)) ? : false;
    }

    public function setParent(MenuItem $parent){
        $this->parent=$parent;
    }
    
    public function getParent(){
        return $this->parent;
    }

    public function getFirstChild()
    {
        return reset($this->children);
    }

    public function getLastChild()
    {
        return end($this->children);
    }

    public function hasChildren()
    {
       return (!empty($this->children));
    }

}