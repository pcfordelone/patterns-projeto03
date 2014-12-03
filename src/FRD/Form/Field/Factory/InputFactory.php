<?php

namespace FRD\Form\Field\Factory;


use FRD\Form\Field\Types\InputType;

class InputFactory extends AbstractFieldFactory
{
    private $attrib;
    private $field;

    public function __construct($attrib)
    {
        $this->attrib = $attrib;
    }

    public function createField()
    {
        $this->field = new InputType($this->attrib);
        return $this->field->getTag();
    }
} 