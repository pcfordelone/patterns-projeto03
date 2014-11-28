<?php
/**
 * Created by PhpStorm.
 * User: PC
 * Date: 27/11/14
 * Time: 17:43
 */

namespace FRD\Form\Fields\Interfaces;

/*

Input
TextArea
Select
Option

*/


interface FieldInterface
{
    ## Obriga que na criação de um Field sejam passados as variáveis abaixo ##
    public function __construct($labelAttrib, $labelText, $fieldAttrib);

    ## Retorna o campo criado  ##
    public function getField();
} 