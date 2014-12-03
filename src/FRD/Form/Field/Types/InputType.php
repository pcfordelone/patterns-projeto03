<?php

namespace FRD\Form\Field\Types;

use FRD\Form\Field\Interfaces\FieldInterface;

class InputType implements FieldInterface
{
    private $tag;
    private $attrib;

    public function __construct($attrib)
    {
        $this->attrib = $attrib;
    }
    public function getTag()
    {
        $this->tag  = "<input ";
        $this->tag .= $this->attrib;
        $this->tag .= " />\n";

        return $this->tag;
    }
} 