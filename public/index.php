<?php

require_once "../autoload.php";

$request = new \FRD\Form\Request();
$validator = new \FRD\Form\Validator($request);

$form01 = new \FRD\Form\Form($validator, "method='POST' action='#' id='myForm'");
$nome = new \FRD\Form\Fields\Types\Input("id='label'", "Nome:", "class='form-control' id='nome' type='name'");
$email = new \FRD\Form\Fields\Types\Input("id='label'", "E-mail:", "class='form-control' id='email' type='email'");
$submit = new \FRD\Form\Fields\Types\Input("", "", "class='btn btn-default' id='submit' type='submit' value='Enviar'");

$form01->createField($nome);
$form01->createField($email);
$form01->createField($submit);


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
            <?php $form01->render(); ?>
        </div>
    </div>
</div>

</body>
</html>
