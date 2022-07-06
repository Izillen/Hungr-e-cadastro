<?php

$server = "127.0.0.1:3307"; //servidor
$user = "root"; //usuario
$password = ""; //senha
$db = "cadastro_hungr-e"; //banco de dados

$conn = mysqli_connect($server, $user, $password, $db); // conexão com banco de dados

// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
$nome = mysqli_real_escape_string($conn, $_REQUEST['nome_input']);
$email = mysqli_real_escape_string($conn, $_REQUEST['email_input']);
$cep = mysqli_real_escape_string($conn, $_REQUEST['cep_input']);
$senha = mysqli_real_escape_string($conn, $_REQUEST['senha_input']);
$confirma_senha = mysqli_real_escape_string($conn, $_REQUEST['conf_input']);
 
// Attempt insert query execution
$sql = "INSERT INTO cadastro_usuario(nome_usu, email_usu, cep_usu,senha_usu,conf_senha_usu ) VALUES ('$nome', '$email', '$cep','$senha', '$confirma_senha')";
if(mysqli_query($conn, $sql)){
    header("Location: pag_inicial.html"); exit;
} else{
    echo "ERROR: Descupa ocorreu um erro :( $sql. " . mysqli_error($conn);
}
 
// Close connection
mysqli_close($conn);
?>