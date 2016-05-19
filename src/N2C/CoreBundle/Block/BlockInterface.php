<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 12/05/16
 * Time: 14:02
 */

namespace N2C\CoreBundle\Block;


use Symfony\Component\Form\FormBuilderInterface;

interface BlockInterface
{
    
    public function buildForm(FormBuilderInterface $builder);

    public function getBlock();
    
    public function getTemplate($extension);

    public function process($template, $settings);
}