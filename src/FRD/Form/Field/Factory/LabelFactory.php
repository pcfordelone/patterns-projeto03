<?php

namespace FRD\Form\Field\Factory;


use FRD\Form\Field\Types\LabelType;

class LabelFactory extends AbstractFieldFactory
{
    private $attrib;
    private $field;
    private $labelText;

    public function __construct($attrib, $labelText)
    {
        $this->attrib = $attrib;
        $this->labelText = $labelText;
    }

    public function createField()
    {
        $this->field = new LabelType($this->attrib);
        $this->field->setLabelText($this->labelText);
        return $this->field->getTag();
    }
} 