<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="styles.css">
  <title>Conversor</title>
</head>
<body>
    <div class="container">
  <?php 
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $numero1 = $_POST['numero1'];
     
      $operador = ($_POST['operador']); 

      $resultado = 0;

      switch ($operador) {
          case "1":
          $resultado = decbin($numero1);
          echo 'El número decimal  en binario es:' .$resultado;
              break;  
          case "2":
            $resultado = bindec($numero1);
            echo 'El número binario en decimal es:' .$resultado;
                break;  

          default:
              echo "Operador no válido o no seleccionado.";
              break;
      }
  }
  ?>
      </
</body>
</html>