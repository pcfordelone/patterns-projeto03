<?php

namespace FRD\Form\Field;

interface FieldInterface
{
    function setType($type);
    function setAttrib($attrib);
    function startField();
    function endField();
    function getField();
}