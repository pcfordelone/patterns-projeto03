<?php

namespace FRD\Form\Field\Types;

use FRD\Form\Field\Interfaces\FieldInterface;

class SelectType implements FieldInterface
{
    private $tag;
    private $attrib;
    public $options = [];

    public function __construct($attrib)
    {
        $this->attrib = $attrib;
    }

    public function setOptions(array $options)
    {
        $this->options = $options;
    }

    function getTag()
    {
        $this->tag  = "<select ";
        $this->tag .= $this->attrib;
        $this->tag .= " >\n";
        foreach ($this->options as $option) {
            $this->tag .= "<option>" . $option . "</option>";
        }
        $this->tag .= "</select>";


        return $this->tag;
    }
} 