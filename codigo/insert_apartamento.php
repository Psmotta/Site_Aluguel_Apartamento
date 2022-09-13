<?php
$server = "localhost";
$user = "root";
$pass = "";
$bd = "apartamentos";

if($conn = mysqli_connect($server, $user, $pass, $bd)){
    //echo ("Conectado!");
        
}
else {
    echo ("Erro!");
}

$conn->set_charset("utf8");

$CEP = $_POST['CEP'];
$Bairro = $_POST['Bairro'];
$Rua = $_POST['Rua'];
$Numero = $_POST['Numero'];
$N_Apto = $_POST['N_Apto'];
$VLR_Aluguel = $_POST['VLR_Aluguel'];
$Qtd_Quartos = $_POST['Qtd_Quartos'];
$Qtd_Banheiro = $_POST['Qtd_Banheiro'];
$Qtd_VagasGaragem = $_POST['Qtd_VagasGaragem'];
$Link = $_POST['Link'];
$Descricao = $_POST['Descricao'];

$sql = "INSERT INTO `cadastrados`(`CEP`, `Bairro`, `Rua`, `Numero`, `N_Apto`, `VLR_Aluguel`, `Qtd_Quartos`, `Qtd_Banheiro`, `Qtd_VagasGaragem`, `Link`, `Descricao`) VALUES ('$CEP', '$Bairro', '$Rua', '$Numero', '$N_Apto', '$VLR_Aluguel', '$Qtd_Quartos', '$Qtd_Banheiro', '$Qtd_VagasGaragem', '$Link', '$Descricao')";

if(mysqli_query($conn, $sql)){

    //echo  "Cadastro realizado com sucesso!";
    header('Location: Sucesso_apartamento.html');
    die();
}
else{

      //echo  "Erro no cadastro!";
      header('Location: Erro_apartamento.html');
      die();
}

?>