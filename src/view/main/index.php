<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel='stylesheet' href="<? echo constant('URL');?>public/css/main/index.css">
  <title>Document</title>
</head>
<body>
  <?php require 'view/components/layout/header.php'; ?>

  <section>
    <h2 class="main">Vista main</h2>
      <form action="<?php echo constant('URL');?>main/saludo" method="POST">
        <p>
          <label for="name">Nombre: </label>
          <input type="text" name="name" id="name">
        </p>
        <input type="submit" value="enviar">
      </form>
  </section>

  <?php require 'view/components/layout/footer.php'; ?>
</body>
</html>
