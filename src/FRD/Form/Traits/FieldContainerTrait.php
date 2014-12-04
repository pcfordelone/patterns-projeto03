<?php

namespace FRD\Form\Traits;


use FRD\Form\Field\Interfaces\FieldInterface;

trait FieldContainerTrait
{
    protected  $fields = [];

    function addField(FieldInterface $field)
    {
        $this->fields[] = $field;
        return $this;
    }
} 