<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 27/11/14
 * Time: 17:43
 */

namespace FRD\Form\Fields\Interfaces;


interface FieldInterface
{
    public function __construct($labelAttrib, $labelText, $fieldAttrib);
    public function getField();
} 