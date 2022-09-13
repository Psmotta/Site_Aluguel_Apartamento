<?php
include('conexao_login.php');

if(empty($_POST['email_pessoa']) || empty($_POST['senha_pessoa'])){
    header('Location: ./login.html');
    exit();
}

$email = mysqli_real_escape_string($conexao ,$_POST['email_pessoa']);
$senha = mysqli_real_escape_string($conexao ,$_POST['senha_pessoa']);

$query = "SELECT * FROM `pessoas` WHERE email_pessoa = '{$email}' and senha_pessoa = ('{$senha}')";


$result = mysqli_query($conexao, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['email_pessoa'] = $email;
    header('Location: ./areacliente.html');
    exit();
} 

else {
    header('Location: ./login_erro.html');
    exit();
}

?> 