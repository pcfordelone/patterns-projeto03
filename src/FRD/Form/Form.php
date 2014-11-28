<?php

namespace FRD\Form;

use FRD\Form\Fields\Interfaces\FieldInterface;
use FRD\Form\Interfaces\FormInterface;

class Form implements FormInterface
{
    private $form;
    private $attributes;
    private $fields;
    private $validator;

    ## Recebe a Classe Validator e os atributos do formulário ##
    public function __construct(Validator $validator, $attributes)
    {
        $this->validator = $validator;
        $this->attributes = $attributes;
    }

    ## Cria Novo Campo no Formulário ##
    public function createField(FieldInterface $field)
    {
        $this->fields[] = $field;
    }
    public function getFields()
    {
        return $this->fields;
    }

    ## Renderiza Formulário em HTML ##
    public function render()
    {
        $this->form = "<form ";
        $this->form .= $this->attributes . " />";

        if (isset($this->fields)) {
            foreach ($this->fields as $field) {
                $this->form .= $field->getField();
            }
        }

        $this->form .= "</form>\n";

        echo $this->form;
    }
} 