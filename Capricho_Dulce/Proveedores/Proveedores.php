<?php
include "Proveedores/Conexión3.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="/Style/Style.css">

         <!-- link de los iconos  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
     <!-- link de los iconos  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css"/>

    <title>Proveedores</title>
</head>
<body>
    
<!--Navbar-->
<header class="header">
    <h1 class="nombre"> Capricho dulce-Proveedores </h1>
    <nav class="navbar">
        <a href="/Inicio.php">Inicio</a>
        <a href="/Catálogo/Catálogo.php">Catálogo</a>
        <a href="/Pedidos/Pedidos.php">Pedidos</a>
        <a href="/Proveedores/Proveedores.php">Proveedores</a>
    </nav>
    <div class="iconos">
        <i class="fas fa-bars" id="menu-bars"></i>
    </div>
</header>

<main class="fondo-proveedores">
<div class="container-title">Proveedores</div>

<!--Proveedores-->

<main class="Espacio_catálogo">
    <div class="container">
        
    <form>
        <div class="form-group">
            <label for="exampleInputPassword1"><h5>Nombre_Proveedor</h5></label>
            <input type="Nombre" class="form-control" id="">
          </div>
        <div class="form-group">
          <label for="exampleInputPassword1"><h5>Dirección</h5></label>
          <input type="Dirección" class="form-control" id="">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1"><h5>Teléfono</h5></label>
            <input type="Teléfono" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><h5>Producto</h5></label>
            <input type="Producto" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><h5>Cantidad_producto</h5></label>
            <input type="Cantidad_producto" class="form-control" id="">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1"><h5>Imagen</h5></label>
            <input type="Imagen" class="form-control" id="">
          </div>
        <button type="submit" class="btn btn-primary">Agregar</button>
      </form>

      <br>
      <br>

<div class="container text-center">
      <table class="table">

        <tr>
            <th>
                <h5>id</h5>
            </th>

            <th>
                <h5> Nombre_Proveedor </h5>
            </th>

            <th>
                <h5> Dirección </h5>
            </th>

            <th>
                <h5> Telefóno </h5>
            </th>

            <th>
                <h5> Producto </h5>
            </th>

            <th>
               <h5> Cantidad_producto </h5> 
            </th>

            <th>
               <h5> Imagen </h5>
            </th>

            <th>
                <h5><i class="bi bi-pencil-square"></i> Editar </h5>
            </th>

            <th>
               <h5> <i class="bi bi-trash-fill"></i> Eliminar </h5> 
            </th>


        </tr>

        <tr>
            <td>1</td>
            <td>Santos Lugos</td>
            <td>Quintana roo, chetumal, av principal</td>
            <td>9812266625</td>
            <td>Harinas</td>
            <td>200 paquetes de harina</td>
            <td> <img src="/img/img-proveedores/proveedor-santos lugos.png" alt="" class="proveedor"></td>

            <td>
                <button type="button" class="btn btn-success text-center">Editar pedido</button>
            </td>

            <td>
                <button type="button" class="btn btn-danger text-center">Eliminar pedido</button>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>Flor de trigo</td>
            <td>CDMX</td>
            <td>981-204-30-75</td>
            <td>Levadura</td>
            <td>200kg de levadura</td>
            <td> <img src="/img/img-proveedores/proveedor-flor de trigo.jpg" alt="" class="proveedor"></td>

            <td>
                <button type="button" class="btn btn-success text-center">Editar pedido</button>
            </td>

            <td>
                <button type="button" class="btn btn-danger text-center">Eliminar pedido</button>
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td>Euro bakery</td>
            <td>CDMX</td>
            <td>981-204-30-75</td>
            <td>Chantillí</td>
            <td>100 cajas de chantilli</td>
            <td> <img src="/img/img-proveedores/proveedor_eurobakery.jpg" alt="" class="proveedor"></td>

            <td>
                <button type="button" class="btn btn-success">Editar pedido</button>
            </td>

            <td>
                <button type="button" class="btn btn-danger">Eliminar pedido</button>
            </td>
        </tr>
        
      </table>

    </div>

</main>

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
                <a href=""> <i class="fas fa-arrow-right"></i>Inicio</a>
                <a href=""> <i class="fas fa-arrow-right"></i>Catálogo</a>
                <a href=""> <i class="fas fa-arrow-right"></i>Pedidos</a>
                <a href=""> <i class="fas fa-arrow-right"></i>Proveedores</a>
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