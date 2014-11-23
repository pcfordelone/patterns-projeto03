<?php

namespace FRD\Form\Elements;


abstract class ElementAbstract
{
    protected $labelAttrib;
    protected $labelName;
    protected $elementAttrib;
    protected $tag;

    public function __construct(array $labelAttrib = null, $labelName, array $inputAttrib)
    {
        $this->labelAttrib = $labelAttrib;
        $this->labelName = $labelName;
        $this->elementAttrib = $inputAttrib;
    }

    public function setLabel()
    {
        $this->tag = "\t<label ";
        foreach ($this->labelAttrib as $key => $value) {
            $this->tag.= "{$key} = \"{$value}\"";
        }
        $this->tag .= " >".$this->labelName."</label>\n";
        return $this->tag;
    }

    abstract public function setElement();

    public function getTag()
    {
        return $this->tag;
    }


} 