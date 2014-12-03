<?php

namespace FRD\Form\Field\Task;


use FRD\Form\Task\TaskInterface;

class CreateInput implements TaskInterface
{
    protected $input;
    protected $tag;
    protected $label;
    protected $attrib;

    function __construct($label, $attrib)
    {
        $this->label = $label;
        $this->attrib = $attrib;
    }

    function run()
    {
        $this->input = new \FRD\Form\Field\Type\Input();
        $this->input->setLabel($this->label);
        $this->input->setType("input");
        $this->input->setAttrib($this->attrib);
        $this->input->startField();
        $this->input->endField();

        $this->tag = $this->input->getField();
        return $this->tag;
    }
} 