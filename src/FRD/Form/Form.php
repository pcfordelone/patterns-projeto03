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


    public function __construct(Validator $validator, $attributes)
    {
        $this->validator = $validator;
        $this->attributes = $attributes;
    }

    public function createField(FieldInterface $field)
    {
        $this->fields[] = $field;
    }
    public function getFields()
    {
        return $this->fields;
    }

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

    /*public function __construct(array $attributes)
    {
        $this->attributes = $attributes;
    }

    public function formStart()
    {
        $this->tag =  "<form";

        foreach ($this->attributes as $key => $value ) {
            $this->tag.= " {$key}=\"{$value}\"";
        }

        $this->tag.=" >\n";
        $this->tag.="<h2>".$this->formTittle."</h2>\n";
        return $this->tag;
    }

    public function formEnd()
    {
        $this->tag.= "</form>\n";
        return $this->tag;
    }

    public function addElement(ElementAbstract $element)
    {
        $this->element = $element;
        $this->tag .= $this->element->getTag();
        return $this->tag;
    }

    public function render()
    {
        echo $this->tag;
    }

    public function setFormTittle($tittle)
    {
        $this->formTittle = $tittle;
    }*/

} 