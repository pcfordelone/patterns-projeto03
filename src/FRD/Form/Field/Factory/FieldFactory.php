<?php

namespace FRD\Form\Field\Factory;

use FRD\Form\Field\Interfaces\FieldFactoryInterface;

class FieldFactory implements FieldFactoryInterface
{
    private static $classDir = "FRD\\Form\\Field\\Types\\";

    public static function createField($type, array $params = [])
    {
        $class = self::$classDir . $type . "Type";
        $field = new $class();
        foreach ($params as $key => $value) {
            $setter = "Set" . ucfirst($key);
            $field->$setter($value);
        }
        return $field;
    }
} 