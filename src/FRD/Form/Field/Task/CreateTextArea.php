<?php

namespace FRD\Form\Field\Task;

use FRD\Form\Task\TaskInterface;

class CreateTextArea implements TaskInterface
{
    protected $textArea;
    protected $tag;
    protected $label;
    protected $attrib;

    function __construct($label, $attrib)
    {
        $this->label = $label;
        $this->attrib = $attrib;
    }

    public function run()
    {
        $this->textArea = new \FRD\Form\Field\Type\TextArea();
        $this->textArea->setLabel($this->label);
        $this->textArea->setType("textarea");
        $this->textArea->setAttrib($this->attrib);
        $this->textArea->startField();
        $this->textArea->endField();

        $this->tag = $this->textArea->getField();
        return $this->tag;
    }
} 