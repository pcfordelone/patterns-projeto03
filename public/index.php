<?php

require_once "../autoload.php";

$formAttributes = array("action" => "","method" => "post","id" => "myForm");

$form = new \FRD\Form\Form($formAttributes);
$form->setFormTittle("Formulário Code.Education");
$form->formStart();

##### Elementos
$nome = new \FRD\Form\Elements\Types\Input(
    array("for" => "nome"),
    "Nome:",
    array("type" => "name", "class" => "form-control", "id" => "nome", "name" => "nome"));
$nome->setLabel();
$nome->setElement();
$nome->getTag();

$email = new \FRD\Form\Elements\Types\Input(
    array("for" => "email"),
    "Email:",
    array("type" => "email", "class" => "form-control", "id" => "email", "name" => "email"));
$email->setLabel();
$email->setElement();
$email->getTag();

$mensagem = new \FRD\Form\Elements\Types\TextArea(
    array("for" => "mensagem"),
    "Mensagem:",
    array("type" => "text", "class" => "form-control", "id" => "mensagem", "name" => "mensagem"));
$mensagem->setLabel();
$mensagem->setElement();
$mensagem->getTag();

$submit = new \FRD\Form\Elements\Types\Input(
    array("for" => "submit"),
    "",
    array("type" => "submit", "class" => "btn btn-default", "id" => "submit", "name" => "submit", "value"=>"Enviar"));

$submit->setElement();
$submit->getTag();
########

$form->addElement($nome);
$form->addElement($email);
$form->addElement($mensagem);
$form->addElement($submit);

$form->formEnd();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Clientes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <![endif]-->

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<div class="container">
    <div class="row clearfix">
        <div class="col-md-12 column">
            <?php $form->render(); ?>
        </div>
    </div>
</div>

</body>
</html>
