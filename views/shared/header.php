<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title> <?php echo $data["titulo"]?></title>  
</head>
<body>
    <?php
     if(!isset($_SESSION))
            {
                session_start();
            }
    ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php"><img src="assets/img/logo-sena.webp" alt="logo" class="logo"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Productos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="index.php?control=producto&action=index">Listar</a>
                <a class="dropdown-item" href="index.php?control=producto&action=insert">Crear nuevo</a> 
            </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Marcas
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="index.php?control=marca&action=index">Listar</a>
                    <a class="dropdown-item" href="index.php?control=marca&action=insert">Crear nuevo</a>
                </div>
            </li>

     </ul>
     <div class="container">
       <br>
      
            <div  class="alert alert-info">
              Pantalla de mensaje
              <a href="#" class="badge badge-success">Ver carrito</a>
            </div>
     </div>
     <ul class="navbar-nav">
            <?php
              if(isset($_SESSION["cedula"]))
              {
               echo "<li class='nav-item'>";
               echo "<a class='nav-link'  href='index.php?control=usuario&action=logout'> Salir </a>";
               echo "</li>";
              }
              else
              {
                echo "<li class='nav-item'>";
                echo "<a class='nav-link'  href='index.php?control=usuario&action=verLogin'> Ingresar </a>";
                echo "</li>";
              }
            
            ?>
          
          

     </ul>       
    </div>
</nav>

</body>
</html>