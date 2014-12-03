<?php

namespace FRD\Form;

use FRD\Form\Field\AbstractField;
use FRD\Form\Task\TaskInterface;
use JsonSchema\Constraints\String;

class Form
{
    private $validator;
    public $fields = [];
    private $form;

    function __construct(Validator $validator)
    {
        $this->validator = $validator;
    }

    function createField(TaskInterface $field)
    {
        $this->fields[] = $field;
    }

    function render()
    {
        $this->form  = "\n<form>\n";

        if (!is_null($this->fields)) {
            foreach ($this->fields as $field) {
                $this->form .= $field->run();
            }
        }

        $this->form .= "</form>\n";

        echo $this->form;
    }
} 