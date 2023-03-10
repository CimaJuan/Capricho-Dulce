<?php
include "Catálogo/Conexión1.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="/Style/Style.css">

         <!-- link de los iconos  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
 <!-- link de los iconos  -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"/>
    <title>Catálogo</title>
</head>
<body>

     <!--Navbar-->
<header class="header">
    <h1 class="nombre"> Capricho dulce-Catálogo </h1>
    <nav class="navbar">
        <a href="../Inicio.php">Inicio</a>
        <a href="../Catálogo/Catálogo.php">Catálogo</a>
        <a href="../Pedidos/Pedidos.php">Pedidos</a>
        <a href="../Proveedores/Proveedores.php">Proveedores</a>
    </nav>
    <div class="iconos">
        <i class="fas fa-bars" id="menu-bars"></i>
    </div>
</header>
    
<div class="container-title">Catálogo</div>

<!--Catálogo-->
<main class="Espacio_catálogo">
    <div class="container">
        
    <form>
        <div class="form-group">
            <label for="exampleInputPassword1"><h5>Nombre_pastel</h5></label>
            <input type="Nombre_pastel" class="form-control" id="">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1"><h5>Sabor</h5></label>
          <input type="Sabor" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"><h5>Precio</h5></label>
            <input type="precio" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><h5>Tamaño</h5></label>
            <input type="Tamaño" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><h5>Detalle_pastel</h5></label>
            <input type="Detalle_Pastel" class="form-control" id="">
          </div>
          <div class="form-group">
        <label for="exampleInputPassword1"> <h5>Imagen </h5></label>
            <input type="Detalle_Pastel" class="form-control" id="">
          </div>
        <button type="submit" class="btn btn-success">Agregar producto</button>
      </form>
</div>

      <br>
      <br>

      
<div class="container text-center">
      <table class="table">

        <tr>
            <th>
                <h5>id</h5>
            </th>

            <th>
               <h5>Nombre_pastel</h5> 
            </th>

            <th>
                <h5>Sabor</h5>
            </th>

            <th>
               <h5>Precio</h5> 
            </th>

            <th>
                <h5>Tamaño</h5>
            </th>

            <th>
                <h5>Detalle_pastel</h5>
            </th>

            <th>
                <h5>Imagen</h5>
            </th>

            <th>
                <h5><i class="bi bi-pencil-square"></i>Editar</h5>
            </th>
            
            <th>
                <h5><i class="bi bi-trash-fill"></i>Eliminar</h5>
            </th>

        </tr>

        <tr>
            <td>1</td>
            <td>Beso de Angel</td>
            <td>chocolate</td>
            <td>$400 </td>
            <td>Mediano</td>
            <td>Pastel cubierto de chantilli relleno de cajeta con chocolate y un flan bnapolitano en medio. </td>
            <td><img src="/img/img-catálogo/Pastel-beso de angel.jpg" alt="" class="pastel"></td>
            <td>
                <button type="button" class="btn btn-success">Editar</button>
             </td>
            <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Pastel de tres leches</td>
            <td>Tres leches</td>
            <td>$350</td>
            <td>Grande</td>
            <td>Pastel de dos piezas relleno de crema mojado en tres leches</td>
            <td><img src="/img/img-catálogo/Pastel de tres leches.jpg" alt="" class="pastel"></td>
            <td>
                <button type="button" class="btn btn-success">Editar</button>
             </td>
            <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
        </tr>
        <tr>
            <td>3</td>
            <td>Pastel de oreo</td>
            <td>Chantilli y oreo</td>
            <td>$350</td>
            <td>Mediano</td>
            <td>Pastel preparado con chantilli y oreo cubierto de chocolate y galletas</td>
            <td><img src="/img/img-catálogo/pastel de oreo.jpg" alt="" class="pastel"></td>
            <td>
                <button type="button" class="btn btn-success">Editar</button>
             </td>
            <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
                
        </tr> 
        <tr>
            <td>4</td>
            <td>Pastel de queso de bola</td>
            <td>Queso de bola y tres leches</td>
            <td>$450</td>
            <td>Grande</td>
            <td>Pastel relleno con tres leches y con queso de bola, forrado con chantillí </td>
            <td><img src="/img/img-catálogo/Pastel de queso de bola.jpg" alt="" class="pastel"></td>
            <td>
                <button type="button" class="btn btn-success">Editar</button>
             </td>
            <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
                
        </tr> 
        <tr>
            <td>5</td>
            <td>Pastel de durazno</td>
            <td>Sabor tres leches con durazno</td>
            <td>$400</td>
            <td>Grande</td>
            <td>Pastel relleno con tres leches y durazno, cubierto con chantillí</td>
            <td><img src="/img/img-catálogo/Pastel de durazno.jpg" alt="" class="pastel"></td>
            <td>
                <button type="button" class="btn btn-success">Editar</button>
             </td>
            <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
                
        </tr> 
        <tr>
            <td>6</td>
            <td>Pastel de frutas</td>
            <td>Sabor chantillí con frutas</td>
            <td>$400</td>
            <td>Mediano</td>
            <td>Pastel relleno de chantilí con frutas y decorado con frutas</td>
            <td><img src="/img/img-catálogo/Pastel de frutas.jpg" alt="" class="pastel"></td>
            <td>
                <button type="button" class="btn btn-success">Editar</button>
             </td>
            <td>
                    <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
                
        </tr> 

      </table>

    </div>

</main>










          
        












































<footer class="footer" id="contacto">
        <div class="box-container">
            <div class="mainBox">
                <div class="content">
                    <h1 class="logoName"> Capricho dulce </h1>
                </div>
                <p>El proposito de este sistema web es de promover la venta de pasteles y postres</p>
            </div>
            <div class="box">
                <h3>Links de navegacion</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Inicio</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>Catálogo</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>Pedidos</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>Proveedores</a>
            </div>
            <div class="box">
                <h3>Información extra</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i>Información de contacto</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>Ing.de software y sistemas</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>Unid Campus Campeche</a>
                <a href="#"> <i class="fas fa-arrow-right"></i>Programación estructurada</a>
            </div>
            <div class="box">
                <h3>contacto</h3> 
                <a href="contacto"> <i class="fas fa-maps"></i>Estamos ubicados en: Campeche, Campeche, Avenida Hidalgo</a>
                <a href="Contacto"> <i class="fas fa-phone"></i>+52 981-204-30-75</a>
                <a href="Contacto"> <i class="fas fa-envelope"></i>usuario123@gmail.com</a>
            </div>
        </div>
        <div class="share">
            <a href="" class="fab fa-facebook-f"></a>
            <a href="" class="fab fa-twitter"></a>
            <a href="" class="fab fa-instagram"></a>
        </div>
        <div class="credit">
            creado por: <span> Ing.Juan Cima y Ing.Dayanara Ramirez </span> |Politicas de privacidad ! 
        </div>
    </footer>



</body>
</html>