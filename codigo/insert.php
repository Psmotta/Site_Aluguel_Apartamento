<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "cadastro";

if($conn = mysqli_connect($server, $user, $pass, $bd)){
    //echo ("Conectado!");
}
else {
    echo ("Erro!");
}

$Nome_pessoa = $_POST['Nome_pessoa'];
$cpf_pessoa = $_POST['cpf_pessoa'];
$nasc_pessoa = $_POST['nasc_pessoa'];
$email_pessoa = $_POST['email_pessoa'];
$senha_pessoa = $_POST['senha_pessoa'];

$sql = "INSERT INTO `pessoas`(`Nome_pessoa`, `cpf_pessoa`, `nasc_pessoa`, `email_pessoa`, `senha_pessoa`) VALUES ('$Nome_pessoa', '$cpf_pessoa', '$nasc_pessoa', '$email_pessoa', '$senha_pessoa')";

if(mysqli_query($conn, $sql)){

    //echo  "Cadastro realizado com sucesso!";
    header('Location: Sucesso.html');
    die();
}
else{

      //echo  "Erro no cadastro!";
      header('Location: Erro.html');
      die();
}

?>