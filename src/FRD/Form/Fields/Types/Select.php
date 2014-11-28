<?php

namespace FRD\Form\Fields\Types;

use FRD\Form\Fields\Interfaces\FieldInterface;

class Select implements FieldInterface
{
    private $labelText;
    private $labelAttrib;
    private $fieldAttrib;
    private $field;

    private $options;

    public function __construct($labelAttrib, $labelText, $fieldAttrib)
    {
        $this->labelAttrib = $labelAttrib;
        $this->labelText = $labelText;
        $this->fieldAttrib = $fieldAttrib;
    }

    public function setOptions(array $options)
    {
        if (!is_null($options)) {
            foreach ($options as $option) {
                $this->options .= $option;
            }
        }
        return $this->options;
    }

    public function getField()
    {
        if (!is_null($this->labelText)) {
            $this->field  = "<label " . $this->labelAttrib." >";
            $this->field .= $this->labelText . "</label\n>";
        }

        $this->field .= "<select " . $this->fieldAttrib . " >\n";

        if (!is_null($this->options)) {
            $this->field .= $this->options;
        }

        $this->field .= "</select>\n";


        return $this->field;
    }
} 