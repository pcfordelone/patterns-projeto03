<?php

namespace FRD\Form\Field\Type;

use FRD\Form\Field\AbstractField;


class Input extends AbstractField
{
    function endField()
    {
        $this->field .= "/>\n";
    }
}