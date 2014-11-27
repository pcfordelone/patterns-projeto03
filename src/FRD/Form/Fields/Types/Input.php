<?php

namespace FRD\Form\Fields\Types;


use FRD\Form\Fields\Interfaces\FieldInterface;

class Input implements FieldInterface
{
    private $labelText;
    private $labelAttrib;
    private $fieldAttrib;
    private $field;

    public function __construct($labelAttrib, $labelText, $fieldAttrib)
    {
        $this->labelAttrib = $labelAttrib;
        $this->labelText = $labelText;
        $this->fieldAttrib = $fieldAttrib;
    }

    public function getField()
    {
        $this->field  = "<label " . $this->labelAttrib." >";
        if (!is_null($this->labelText)) {
            $this->field .= $this->labelText . "</label>";
        }

        $this->field .= "<input " . $this->fieldAttrib . " />";

        return $this->field;
    }
} 