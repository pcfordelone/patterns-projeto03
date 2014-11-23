<?php

namespace FRD\Form\Elements\Types;


use FRD\Form\Elements\ElementAbstract;

class TextArea extends ElementAbstract
{
    public function setElement()
    {
        $this->tag .= "\t<textarea ";
        foreach ($this->elementAttrib as $key => $value) {
            $this->tag.= " {$key} = \"{$value}\"";
        }
        $this->tag .= "></textarea>\n";
        return $this->tag;
    }
} 