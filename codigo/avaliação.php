<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Language" content="pt-br, en">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="ALL.CSS">
  <link rel="stylesheet" href="avaliação.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Avaliação</title>
</head>

<body>
  <div class="container">
    <form class="box" action="processa_avalia.php" method="POST">
      <h1>Avaliação</h1>
      <?php
      if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);        
      }
      ?>
     <br>
      <div class="estrelas">
        <input type="radio" id="vazio" name="estrela" value="" checked>
        
        <label for="estrela_um"><i class="fa"></i></label>
        <input type="radio" id="estrela_um" name="estrela" value="1">
        
        <label for="estrela_dois"><i class="fa"></i></label>
        <input type="radio" id="estrela_dois" name="estrela" value="2">
        
        <label for="estrela_tres"><i class="fa"></i></label>
        <input type="radio" id="estrela_tres" name="estrela" value="3">
        
        <label for="estrela_quatro"><i class="fa"></i></label>
        <input type="radio" id="estrela_quatro" name="estrela" value="4">
        
        <label for="estrela_cinco"><i class="fa"></i></label>
        <input type="radio" id="estrela_cinco" name="estrela" value="5"><br><br>
        
        <input type="submit" value="Enviar">        
    </div>
      <a href="./areacliente.html" class="esqueceu" style="text-decoration: none;"><p></p>Voltar</p></a>
      <a href="./index_logado.html" class="esqueceu" style="text-decoration: none;"><p></p>Home</p></a>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
</body>

</html>