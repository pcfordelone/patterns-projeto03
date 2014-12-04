<?php

namespace FRD\Form\Field\Types;

use FRD\Form\Field\Interfaces\FieldInterface;

class SelectType implements FieldInterface
{
    private $field;
    private $attrib;
    public $options = [];

    function setAttrib($attrib)
    {
        $this->attrib = $attrib;
    }
    function setOptions(array $options)
    {
        $this->options = $options;
    }

    function getField()
    {
        $this->field  = "<select ";
        $this->field .= $this->attrib;
        $this->field .= " >\n";
        foreach ($this->options as $option) {
            $this->field .= "<option>" . $option . "</option>";
        }
        $this->field .= "</select>";

        return $this->field;
    }
} 