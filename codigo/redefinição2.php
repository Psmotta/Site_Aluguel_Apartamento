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

include('teste.php');
$email = $email_pessoa;
$senha_pessoa = $_POST['senha_pessoa'];

$sql = "UPDATE `pessoas` SET `senha_pessoa`='$senha_pessoa' WHERE `email_pessoa`='$email'";

if(mysqli_query($conn, $sql)){

    //echo  "Cadastro realizado com sucesso!";
    header('Location: senha_sucesso.php');
    die();
}
else{

      //echo  "Erro no cadastro!";
      header('Location: erro_senha.php');
      die();
}

?>