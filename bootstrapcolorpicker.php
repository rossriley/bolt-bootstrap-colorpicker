<?php

namespace Bolt\Extension\sahassar\bootstrapcolorpicker;

use Bolt\Field\FieldInterface;

class bootstrapcolorpicker implements FieldInterface {

    public function getName()
    {
        return 'bootstrapcolorpicker';
    }

    public function getTemplate()
    {
        return '_bootstrap-colorpicker.twig';
    }

    public function getStorageType()
    {
        return 'text';
    }

    public function getStorageOptions()
    {
        return array('default'=>'');
    }

}