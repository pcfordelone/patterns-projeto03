<?php

namespace FRD\Form\Interfaces;

use FRD\Form\Elements\ElementAbstract;

interface FormInterface
{
    public function __construct(array $attributes);
    public function formStart();
    public function formEnd();
    public function addElement(ElementAbstract $element);
    public function render();
    public function setFormTittle($tittle);
} 