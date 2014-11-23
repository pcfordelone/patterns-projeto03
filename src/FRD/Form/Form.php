<?php

namespace FRD\Form;

use FRD\Form\Elements\ElementAbstract;
use FRD\Form\Interfaces\FormInterface;

class Form implements FormInterface
{
    private $formTittle;
    private $tag;
    private $attributes;
    private $element;

    public function __construct(array $attributes)
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
        $this->tag.="\t\t<h2>".$this->formTittle."</h2>\n";
        return $this->tag;
    }

    public function formEnd()
    {
        $this->tag.= "\t</form>\n";
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
    }
} 