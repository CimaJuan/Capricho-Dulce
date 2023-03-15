<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
        <link rel="stylesheet" href="../Styles/Styles.css">
    <title>Pedidos</title>
     <!-- link de los iconos  -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>
<body>

    <div class="container-title">Pedidos</div>

    <div class="container my-5">
    <form>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputEmail4"><h6>Nombre del ciente</h6></label>
            <input type="email" class="form-control" id="Nombre">
          </div>
          <div class="form-group col-md-6">
            <label for="inputPassword4"><h6>Dirección</h6></label>
            <input type="password" class="form-control" id="">
          </div>
        </div>
        <div class="form-group">
          <label for="inputAddress"><h6>Numero de teléfono</h6></label>
          <input type="text" class="form-control" id="inputAddress" placeholder="1234">
        </div>
        <div class="form-group">
          <label for="inputAddress2"><h6>Fecha de pedido</h6></label>
          <input type="text" class="form-control" id="inputAddress2" placeholder="00/00/00">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity"><h6>Comentario extra</h6></label>
            <input type="text" class="form-control" id="Comentario">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState"><h6>Categorias</h6></label>
            <select id="inputState" class="form-control">
              <option>Pastel de Beso de angel</option>
              <option>Pastel de Oreo</option>
              <option>Pastel de Chocolate</option>
              <option> pastel de Durazno</option>
              <option> Pastel de Frutas</option>
              <option>Pastel de Queso de bola</option>
              <option>---------------------------------------</option>
              <option>Cup cake-vainilla</option>
              <option>Cup cake-relleno de chocolate</option>
              <option>Cup cake-chocolate</option>
              <option>---------------------------------------</option>
              <option>Galletas</option>
              <option>Flan napolitano</option>
              <option>Cheesecake</option>
              <option>Brownie</option>
              <option>Gelatina</option>
              <option>Macarron</option>
              
            </select>
          </div>
          <div class="form-group">
            <label for="inputAddress"> <h6>Cantidad</h6></label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234">
          </div>

        </div>


        <button type="pedido" class="btn btn-detalles">Realizar pedido</button>
      </form>

</div>






















































































































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
                <a href="../Index.php"> <i class="fas fa-arrow-right"></i>Inicio</a>
                <a href="../Catálogo/Catálogo.php"> <i class="fas fa-arrow-right"></i>Catálogo</a>
                <a href="../Pedidos/Pedidos.php"> <i class="fas fa-arrow-right"></i>Pedidos</a>
                <a href="../Proveedores/Proveedores.php"> <i class="fas fa-arrow-right"></i>Proveedores</a>
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