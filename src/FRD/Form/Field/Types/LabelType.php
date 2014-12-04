<?php

namespace FRD\Form\Field\Types;

use FRD\Form\Field\Interfaces\FieldInterface;

class LabelType implements FieldInterface
{
    private $field;
    private $attrib;
    private $text;

    public function setAttrib($attrib)
    {
        $this->attrib = $attrib;
    }

    public function setText($text)
    {
        $this->text = $text;
    }

    function getField()
    {
        $this->field = "<label ";
        if (!is_null($this->attrib)) {
            $this->field .= $this->attrib;
        }
        $this->field .= " >";
        if (!is_null($this->text)) {
            $this->field .= $this->text;
        }
        $this->field .= "</label>\n";

        return $this->field;
    }
} 