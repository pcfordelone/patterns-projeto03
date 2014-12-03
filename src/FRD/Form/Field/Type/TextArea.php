<?php

namespace FRD\Form\Field\Type;


use FRD\Form\Field\AbstractField;

class TextArea extends AbstractField
{
    function endField()
    {
        $this->field .= "></textarea>\n";
    }
}