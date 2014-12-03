<?php

require_once "../vendor/autoload.php";

require_once "pages/formHeader.php";

$request = new \FRD\Form\Request();
$validator = new \FRD\Form\Validator($request);
$form = new \FRD\Form\Form($validator);

$nome = new \FRD\Form\Field\Task\CreateInput("Nome:", "type='name' class='form-control' id='name' name='name'");
$email = new \FRD\Form\Field\Task\CreateInput("E-mail:", "type='email' class='form-control' id='email' name='email'");

$sexo = new \FRD\Form\Field\Task\CreateSelect("Sexo:","class='form-control form-control-inline' id='sexo' name='sexo'");
$sexo->setOptions(["Masculino","Feminino"]);

$mensagem = new \FRD\Form\Field\Task\CreateTextArea("Mensagem", "class='form-control' id='inputMessage' name='inputMessage'");
$submit = new \FRD\Form\Field\Task\CreateInput(null, "type='submit' class='btn btn-default' name='submit' value='Enviar'");

$form->createField($nome);
$form->createField($email);
$form->createField($sexo);
$form->createField($mensagem);
$form->createField($submit);
$form->render();

require_once "pages/formFooter.php";