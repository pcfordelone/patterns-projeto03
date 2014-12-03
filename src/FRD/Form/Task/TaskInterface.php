<?php

namespace FRD\Form\Task;


interface TaskInterface
{
    function __construct($label, $attrib);
    function run();
} 