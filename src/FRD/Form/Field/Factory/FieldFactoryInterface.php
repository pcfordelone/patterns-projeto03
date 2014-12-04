<?php

namespace FRD\Form\Field\Factory;


interface FieldFactoryInterface
{
    public static function createField($type, $attrib);
}