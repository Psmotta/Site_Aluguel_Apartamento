<?php
session_start();
include_once("conexao_avalia.php");

if(!empty($_POST['estrela'])){
    $estrela = $_POST['estrela'];

    $result_estrelas = "INSERT INTO estrelas (Qtd_estrela, Qnd_criado) VALUES ('$estrela', NOW())";
    $resultado_estrelas = mysqli_query($conn, $result_estrelas);

if(mysqli_insert_id($conn)){
    $_SESSION['msg'] = "";
    header("Location: avaliação_sucesso.html");

}else{
    $_SESSION['msg'] = "Erro ao cadastrar avaliação";
    header("Location: avaliação.php");
}
}else{
    $_SESSION['msg'] = "Necessário selecionar pelo menos uma estrela";
    header("Location: avaliação.php");
}