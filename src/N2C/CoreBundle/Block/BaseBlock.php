<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 14/05/16
 * Time: 18:15
 */

namespace N2C\CoreBundle\Block;


use Symfony\Component\Form\FormBuilderInterface;

abstract class BaseBlock implements BlockInterface
{
    protected $baseTemplate;
    
    abstract public function buildForm(FormBuilderInterface $builder);
    
    abstract public function getBlock();
    
    public function getTemplate($extension)
    {
        return $this->getBaseTemplate().".".strtolower($extension).".twig";
    }

    /**
     * @return mixed
     */
    public function getBaseTemplate()
    {
        return $this->baseTemplate;
    }

    /**
     * @param mixed $baseTemplate
     */
    public function setBaseTemplate($baseTemplate)
    {
        $this->baseTemplate = $baseTemplate;
    }    
}