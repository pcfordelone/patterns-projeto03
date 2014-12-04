<?php

/*$form->addField(new \FRD\Form\Field\Factory\LabelFactory("for='nome'", "Nome:"));
$form->addField(new \FRD\Form\Field\Factory\InputFactory("type='name' class='form-control' id='name' name='name'"));
$form->addField(new \FRD\Form\Field\Factory\LabelFactory("for='email'", "E-mail:"));
$form->addField(new \FRD\Form\Field\Factory\InputFactory("type='email' class='form-control' id='email' name='email'"));
$form->addField(new \FRD\Form\Field\Factory\LabelFactory("for='sexo'", "Sexo:"));
$form->addField(new \FRD\Form\Field\Factory\SelectFactory("class='form-control'",['Masculino','Feminino']));
$form->addField(new \FRD\Form\Field\Factory\LabelFactory("for='mensagem'", "Mensagem:"));
$form->addField(new \FRD\Form\Field\Factory\TextAreaFactory("class='form-control' id='mensagem' name='mesangem'"));

$form->addField(new \FRD\Form\Field\Factory\InputFactory("type='submit' class='btn btn-default' id='submit' name='submit' value='Enviar'"));*/

require_once "../vendor/autoload.php";

require_once "pages/formHeader.php";

$form = new \FRD\Form\Form(new \FRD\Form\Validator(new \FRD\Form\Request()));

$fieldset = \FRD\Form\Field\Factory\FieldFactory::createField("FieldSet", [
    "attrib" => "class=''",
    "legend" => "Formulário de Contato"
]);

$labelNome = \FRD\Form\Field\Factory\FieldFactory::createField("Label", [
    "attrib" => "for='name' class=''",
    "text" => "Nome:"
]);

$nome = \FRD\Form\Field\Factory\FieldFactory::createField("Input", [
    "attrib" => "type='name' class='form-control' id='name' name='name' placeholder='Insira seu nome completo'",
]);
$labelEmail = \FRD\Form\Field\Factory\FieldFactory::createField("Label", [
    "attrib" => "for='email' class=''",
    "text" => "E-mail:"
]);
$email = \FRD\Form\Field\Factory\FieldFactory::createField("Input", [
    "attrib" => "type='email' class='form-control' id='email' name='email' placeholder='Insira um e-mail válido'",
]);
$labelSexo = \FRD\Form\Field\Factory\FieldFactory::createField("Label", [
    "attrib" => "for='sexo' class=''",
    "text" => "Sexo:"
]);
$sexo = \FRD\Form\Field\Factory\FieldFactory::createField("Select",[
    "attrib" => "class='form-control form-control-inline' id='sexo' name='sexo'",
    "options" => ["Masculino", "Feminino"]
]);

$labelMensagem = \FRD\Form\Field\Factory\FieldFactory::createField("Label", [
    "attrib" => "for='mensagem' class=''",
    "text" => "Mensagem:"
]);
$mensagem = \FRD\Form\Field\Factory\FieldFactory::createField("TextArea", [
    "attrib" => "class='form-control' id='mensagem' name='mensagem'"
]);
$submit = \FRD\Form\Field\Factory\FieldFactory::createField("Input", [
    "attrib" => "type='submit' class='btn btn-default' id='submit' name='submit' value='Enviar'"
]);

$form
    ->addField($fieldset
        ->addField($labelNome)
        ->addField($nome)
        ->addField($labelEmail)
        ->addField($email)
        ->addField($labelSexo)
        ->addField($sexo)
        ->addField($labelMensagem)
        ->addField($mensagem)
);
$form->addField($submit);
$form->render();

require_once "pages/formFooter.php";