<?php

namespace FRD\Form\Field\Interfaces;


interface FieldFactoryInterface
{
    public static function createField($type, array $params = []);
}