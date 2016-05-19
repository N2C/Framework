<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 14/05/16
 * Time: 17:15
 */

namespace N2C\CoreBundle\Block;


use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Templating\EngineInterface;

class CardBlock extends BaseBlock
{
    private $title;
    private $content;
    private $actions =array();

    public function __construct(){
        $this->baseTemplate = "N2CCoreBundle:Cards:BasicCard";
    }


    public function buildForm(FormBuilderInterface $builder)
    {
        // TODO: Implement buildForm() method.
    }


    public function getBlock()
    {
        return array(
            "title"=>$this->getTitle(),
            "content"=>$this->getContent(),
            "actions"=>$this->getActions()
        );
    }



    

    
}