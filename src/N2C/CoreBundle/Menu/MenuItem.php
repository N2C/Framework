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

    protected $attributes=array();

    protected $icon;


    public function getIcon()
    {
        return $this->icon;
    }


    public function setIcon($icon)
    {
        $this->icon = (string) $icon;
        return $this;
    }
    

    public function getAttributes()
    {
        return $this->attributes;
    }
    
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;
    }

    public function addAttributes($key, $attribute){
        $this->attributes[$key] = $attribute;
    }

    public function hasAttribute($key){
        return (isset($this->attributes[$key])) ? $this->attributes[$key] : false ;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }


    public function setContent($content)
    {
        $this->content = $content;
        return $this;
    }

    /**
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }


    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return $this->uri;
    }


    public function setUri($uri)
    {
        $this->uri = $uri;
        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }


    public function setType($type)
    {
        $this->type = $type;
        return $this;
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
        if(!empty($child->getParent())){
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
       return !(empty($this->children));
    }

}