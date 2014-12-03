<?php

namespace FRD\Form\Field\Factory;

use FRD\Form\Field\Types\TextAreaType;

class TextAreaFactory extends AbstractFieldFactory
{
    private $attrib;
    private $field;

    public function __construct($attrib)
    {
        $this->attrib = $attrib;
    }

    public function createField()
    {
        $this->field = new TextAreaType($this->attrib);
        return $this->field->getTag();
    }
}