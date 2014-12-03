<?php

namespace FRD\Form\Field\Task;

use FRD\Form\Task\TaskInterface;

class CreateSelect implements TaskInterface
{
    protected $select;
    protected $tag;
    protected $label;
    protected $attrib;
    protected $options;

    function __construct($label, $attrib)
    {
        $this->label = $label;
        $this->attrib = $attrib;
    }

    function setOptions(array $options)
    {
        $this->options = $options;
    }

    function run()
    {
        $this->select = new \FRD\Form\Field\Type\Select($this->options);
        $this->select->setLabel($this->label);
        $this->select->setType("select");
        $this->select->setAttrib($this->attrib);
        $this->select->startField();
        $this->select->endField();

        $this->tag = $this->select->getField();
        return $this->tag;
    }
} 