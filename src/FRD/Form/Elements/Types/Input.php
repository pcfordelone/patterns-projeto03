<?php

namespace FRD\Form\Elements\Types;

use FRD\Form\Elements\ElementAbstract;

class Input extends ElementAbstract
{
    public function setElement()
    {
        $this->tag .= "\t<input ";
        foreach ($this->elementAttrib as $key => $value) {
            $this->tag.= " {$key} = \"{$value}\"";
        }
        $this->tag .= " />\n";
        return $this->tag;
    }
} 