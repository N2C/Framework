<?php
/**
 * Created by PhpStorm.
 * User: nicolas
 * Date: 12/05/16
 * Time: 14:02
 */

namespace N2C\CoreBundle\Block;


interface BlockInterface
{
    public function getName();
    
    public function getBlock();
}