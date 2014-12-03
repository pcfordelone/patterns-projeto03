<?php

require_once "../vendor/autoload.php";

require_once "pages/formHeader.php";

$request = new \FRD\Form\Request();
$validator = new \FRD\Form\Validator($request);
$form = new \FRD\Form\Form($validator);

$form->addField(new \FRD\Form\Field\Factory\LabelFactory("for='nome'", "Nome:"));
$form->addField(new \FRD\Form\Field\Factory\InputFactory("type='name' class='form-control' id='name' name='name'"));
$form->addField(new \FRD\Form\Field\Factory\LabelFactory("for='email'", "E-mail:"));
$form->addField(new \FRD\Form\Field\Factory\InputFactory("type='email' class='form-control' id='email' name='email'"));
$form->addField(new \FRD\Form\Field\Factory\LabelFactory("for='sexo'", "Sexo:"));
$form->addField(new \FRD\Form\Field\Factory\SelectFactory("class='form-control'",['Masculino','Feminino']));
$form->addField(new \FRD\Form\Field\Factory\LabelFactory("for='mensagem'", "Mensagem:"));
$form->addField(new \FRD\Form\Field\Factory\TextAreaFactory("class='form-control' id='mensagem' name='mesangem'"));

$form->addField(new \FRD\Form\Field\Factory\InputFactory("type='submit' class='btn btn-default' id='submit' name='submit' value='Enviar'"));

$form->render();

require_once "pages/formFooter.php";