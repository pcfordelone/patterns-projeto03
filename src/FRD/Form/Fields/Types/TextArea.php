<?php

namespace FRD\Form\Fields\Types;


use FRD\Form\Fields\Interfaces\FieldInterface;

class TextArea implements FieldInterface
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
        if (!is_null($this->labelText)) {
            $this->field  = "<label " . $this->labelAttrib." >";
            $this->field .= $this->labelText . "</label>";
        }

        $this->field .= "<textArea " . $this->fieldAttrib . " ></textArea>\n";

        return $this->field;
    }

} 