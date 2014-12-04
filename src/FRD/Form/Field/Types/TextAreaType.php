<?php

namespace FRD\Form\Field\Types;

use FRD\Form\Field\Interfaces\FieldInterface;

class TextAreaType implements FieldInterface
{
    private $field;
    private $attrib;

    public function setAttrib($attrib)
    {
        $this->attrib = $attrib;
    }

    function getField()
    {
        $this->field = "<textarea ";
        if (!is_null($this->attrib)) {
            $this->field .= $this->attrib;
        }
        $this->field .= " ></textarea>\n";
        return $this->field;
    }
} 