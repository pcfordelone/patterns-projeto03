<?php

namespace FRD\Form\Interfaces;


use FRD\Form\Validator;

interface FormInterface
{
    public function __construct(Validator $validator, $attributes);
    public function render();

} 