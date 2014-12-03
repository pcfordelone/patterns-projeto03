<?php

namespace FRD\Form\Field;

//<input type="text" class="form-control" id="inputNome" name="inputNome" />
abstract class AbstractField implements FieldInterface
{
    protected $type, $attrib, $field, $labelText;

    function setLabel($label)
    {
        $this->labelText = $label;
    }

    function setType($type)
    {
        $this->type = $type;
    }

    function setAttrib($attrib)
    {
        $this->attrib = $attrib;
    }

    function startField()
    {
        $this->field  = "<label>" . $this->labelText . "</label>\n";
        $this->field .= "<" . $this->type . " ";
        $this->field .= $this->attrib;
    }

    abstract function endField();

    function getField()
    {
        return $this->field;
    }
} 