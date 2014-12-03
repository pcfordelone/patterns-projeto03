<?php

namespace FRD\Form\Field\Factory;


abstract class AbstractFieldFactory
{
    abstract public function createField();

    public function getField()
    {
        return $this->createField();
    }
} 