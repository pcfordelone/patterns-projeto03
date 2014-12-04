<?php

namespace FRD\Form;


use FRD\Form\Traits\FieldContainerTrait;

class Form
{
    use FieldContainerTrait;

    private $validator;
    private $form;

    function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    function render()
    {
        $this->form  = "\n<form>\n";

        if (!is_null($this->fields)) {
            foreach ($this->fields as $field) {
                $this->form .= $field->getField();
            }
        }

        $this->form .= "</form>\n";

        echo $this->form;
    }
} 