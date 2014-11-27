<?php

namespace FRD\Form;


class Field {

    //<input type="name" id="nome" name="nome" />
    /*
    $nome = new Field("input","'type=>name', 'id=>nome', 'name=>nome'");
    */
    /*private $field;
    private $type;
    private $attributes;*/

    public function __construct(FieldType $type);
    /*{
        $this->field  = "<";
        $this->field .= " {$type}";
        foreach ($attributes as $key => $attribute) {
            $this->field .= " {$key} = \"{$attribute}\"";
        }
        $this->field .= "/>";
    }*/
    public function setAttribute(array $attributes);
    /*{
        $this->attributes = $attributes;
    }*/

    public function render();
    /*{
        $this->field = "<{$this->type} ";
        $this->field .= $this->type;
        $this->field .= $this->attributes;

        return $this->field;
    }*/
}

