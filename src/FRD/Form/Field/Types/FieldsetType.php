<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 04/12/14
 * Time: 14:02
 */

namespace FRD\Form\Field\Types;


use FRD\Form\Field\Interfaces\FieldInterface;
use FRD\Form\Traits\FieldContainerTrait;

class FieldsetType implements FieldInterface
{
    use FieldContainerTrait;

    private $field;
    private $attrib;
    private $lengend;

    function setAttrib($attrib)
    {
        $this->attrib = $attrib;
    }
    function setLegend($legend)
    {
        $this->lengend = $legend;
    }

    function getField()
    {
        $this->field = "<fieldset ";
        if (!is_null($this->attrib)) {
            $this->field .= $this->attrib;
        }
        $this->field .= " >\n";
        if (!is_null($this->lengend)) {
            $this->field .= "<legend>" . $this->lengend . "</legend>";
        }
        if (!is_null($this->fields)) {
            foreach ($this->fields as $field) {
                $this->field .= $field->getField();
            }
        }
        $this->field .= "</fieldset>\n";
        return $this->field;
    }
} 