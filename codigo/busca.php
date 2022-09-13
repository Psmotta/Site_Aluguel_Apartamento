<?php
if(!isset($_GET['search'])) {
    header("Location: index.php");
    exit;
}

$Bairro = "%".trim($_GET['search'])."%";

$dbh = new PDO('mysql:host=127.0.0.1;dbname=apartamentos', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND =>"SET NAMES utf8"));

$sth = $dbh->prepare('SELECT * FROM cadastrados WHERE Bairro LIKE :Bairro');
$sth->bindParam(':Bairro', $Bairro, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Language" content="pt-br, en">
    <title>Resultado da busca</title>
    <script src="https://kit.fontawesome.com/1e592b5726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./alugue.css">
    <link rel="stylesheet" href="/ALL.CSS">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

</head>
<body>
    
    <header>

        <div>
            <img class = "logo-two" src="./images/VOX-removebg-preview.png"  alt="Mq">
        </div>

        <form action="busca.php" method="GET">
            <input type="text" name="search" id="search" placeholder="Digite o Bairro" required>
            <button type="submit"><i class="fas fa-search"></i></button>
        </form>

        <a href="http://www.localhost/VOX/login.html"> <button type="button"  class="btn btn-light">Login/Cadastro</button></a>
        
    </header>

    <section>
        <?php
            if(count($resultados)) {
            foreach($resultados as $Resultado) {
        ?>
        <label>
        <div class="product">
            <img class="product-one" src="<?php echo $Resultado['Link']; ?>" alt="m">
            <div class="products">
                <h1>Apartamento <?php echo $Resultado['Bairro']; ?></h1><br>
                <h3>Sobre:</h3><p><?php echo $Resultado['Descricao']; ?></p>
                <h3>R$<?php echo $Resultado['VLR_Aluguel']; ?></h3>
                <a href="http://www.localhost/VOX/login.html"> <button type="button" class="btn btn-danger" id="#btn">Alugue</button></a>
            </div>
        </div>
        </label>
        <br>
        <?php
         }   } else {
        ?>
        <div class="product">
        <h3>Não foram encontrados resultados pelo termo buscado.</h3>
        </div>
        <?php
         }
         ?>  
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

</body>
</html>
