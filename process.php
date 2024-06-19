<?php

include("config.php");

//print_r($_POST);

// insert contact data into db
$nome = mysqli_real_escape_string($connection, $_POST["nome"]);
$email = mysqli_real_escape_string($connection, $_POST["email"]);
$telemovel = mysqli_real_escape_string($connection, $_POST["telemovel"]);
$mensagem = mysqli_real_escape_string($connection, $_POST["mensagem"]);


$query = "insert into contactos
    (nome, email, telemovel, mensagem) values ('$nome', '$email','$telemovel','$mensagem')";

$result = mysqli_query($connection, $query);
if (!$result) {
    $msgType = "danger";
    $msg = "Erro ao enviar mensagem";
} else {
    $msgType = "success";
    $msg = "Mensagem enviada";
}

echo $msg;