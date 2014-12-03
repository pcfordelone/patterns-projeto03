<?php

namespace FRD\Form;


class Validator
{
    private $request;

    function __construct(Request $request)
    {
        $this->request = $request;
    }
} 