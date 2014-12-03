<?php

namespace FRD\Form\Field\Types;

use FRD\Form\Field\Interfaces\FieldInterface;

class LabelType implements FieldInterface
{
    private $tag;
    private $attrib;
    private $labelText;

    public function __construct($attrib)
    {
        $this->attrib = $attrib;
    }

    public function setLabelText($labelText)
    {
        $this->labelText = $labelText;
    }

    function getTag()
    {
        $this->tag = "<label ";
        $this->tag .= $this->attrib;
        $this->tag .= " >\n";
        $this->tag .= $this->labelText;
        $this->tag .= "</label>";

        return $this->tag;
    }
} 