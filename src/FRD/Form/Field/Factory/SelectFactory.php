<?php

namespace FRD\Form\Field\Factory;

use FRD\Form\Field\Types\SelectType;

class SelectFactory extends AbstractFieldFactory
{
    private $attrib;
    private $field;
    private $options;

    public function __construct($attrib, array $options)
    {
        $this->attrib = $attrib;
        $this->options = $options;
    }

    public function createField()
    {
        $this->field = new SelectType($this->attrib);
        $this->field->setOptions($this->options);
        return $this->field->getTag();
    }
} 