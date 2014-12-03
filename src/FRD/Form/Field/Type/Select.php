<?php

namespace FRD\Form\Field\Type;


use FRD\Form\Field\AbstractField;

class Select extends AbstractField
{
    public $options;

    function __construct(array $options)
    {
        $this->options = $options;
    }

    function endField()
    {
        $this->field .= ">";
        foreach ($this->options as $option) {
            $this->field .= "<option>" . $option . "</option>";
        }
        $this->field .= "</select>";
    }
} 