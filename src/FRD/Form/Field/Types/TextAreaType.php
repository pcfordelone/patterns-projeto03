<?php

namespace FRD\Form\Field\Types;

use FRD\Form\Field\Interfaces\FieldInterface;

class TextAreaType implements FieldInterface
{
    private $tag;
    private $attrib;

    public function __construct($attrib)
    {
        $this->attrib = $attrib;
    }

    function getTag()
    {
        $this->tag  = "<textarea ";
        $this->tag .= $this->attrib;
        $this->tag .= " ></textarea>\n";

        return $this->tag;
    }
} 