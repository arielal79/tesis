<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!--prueba bootstrap-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!--fin prueba--> 
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/10753f982c.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/styles.css" />
    <title>Editar Rubro</title>
</head>
<body>
    <header class="container-fluid bg-light header shadow">
        <div class="row">
          <div class="col">
            <h1 class="text-dark text-center p-3 mt-5">
              Sistema de Seguimiento de Expedientes
            </h1>
          </div>
        </div>
      </header>
      <div class="container mt-3">
        <h2 class="text-center">Editar Rubro</h2>
        <div class="row shadow">
          <div class="col-xl-4 col-lg-6 col-xs-12 shadow">
            <div class="dropdown p-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Inicio
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="index.php">Inicio</a>
              </div>
            </div>
            <div class="dropdown p-3">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Bandeja de pases
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="bandeja.php">Recibir</a>
                <a class="dropdown-item" href="#">Archivar</a>
                <a class="dropdown-item" href="#">enviar</a>
              </div>
            </div>
            <div class="dropdown p-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Expedientes
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="nuevo_exp.php">Nuevo</a>
                <a class="dropdown-item" href="consulta_exp.php">Consultar</a>
                <a class="dropdown-item" href="#">Buscar</a>
              </div>
            </div>
            <div class="dropdown p-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Usuarios
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="nuevo_usuario.php">Nuevo</a>
                <a class="dropdown-item" href="edit_usuario.php">Editar</a>
                <a class="dropdown-item" href="#">Buscar</a>
              </div>
            </div>
            <div class="dropdown p-3">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Informes
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Por usuarios</a>
                <a class="dropdown-item" href="#">Por expedientes</a>
                
              </div>
            </div>
            <div class="dropdown p-3">
              <button
                class="btn btn-secondary dropdown-toggle"
                type="button"
                id="dropdownMenuButton"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Mantenimiento
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="nuevo_rubro.php">Agregar Rubro</a>
                  <a class="dropdown-item" href="edit_rubro.php">Editar Rubro</a>
                  <a class="dropdown-item" href="nuevo_iniciador.php">Agregar Iniciador</a>
                  <a class="dropdown-item" href="edit_iniciador.php">Editar Iniciador</a>
                  <a class="dropdown-item" href="nueva_repart.php">Agregar Reparticion</a>
                  <a class="dropdown-item" href="#">Editar Reparticion</a>
              </div>
            </div>
            <div class="dropdown p-3">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cerrar Sesión
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Cerrar Sesión</a>
                
              </div>
            </div>
        </div>
      <div class="col-xl-8 col-lg-6 col-xs-12">
        <div class="alert bg-light text-dark shadow">
          <form method="POST" action="#">
            
            <label for="rubro">Rubro</label>
            <input
              type= "text"
              id="rubro"
              placeholder="Rubro"
              maxlength="20"
            />
            <br>          
            <label for="concepto">Descripción</label>
            <br />
            <textarea
              
              id="concepto"
              minlength="10"
              maxlength="100"
              rows="5"
              cols="60"
              placeholder="Descripción del rubro"
            ></textarea>
            <br>
            <button class="btn btn-dark badge-pill">Guardar</button>
            <button class="btn btn-dark badge-pill">Cancelar</button>
            <a  href="index.php" class="btn btn-dark badge-pill">Volver</a>
          </form>
        </div>
      </div>
    </div>
  </div>
      <footer class="contanier mt-5 bg-dark">
        <div class="row justify-content-center align-items-center">
          <div class="col-lg-3 col-md-3 col-xs-12 text-center text-white">
            <address>
              <p>Blas Parera 1662</p>
            </address>
            <p>Tel.:37947748..</p>
            <i class="fab fa-instagram fa-3x text-danger"></i>
            <i class="fab fa-facebook-f fa-3x text-primary"></i>
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 text-center text-white">
            Copyright © 2020 Imagine Team
          </div>
          <div class="col-lg-3 col-md-3 col-xs-12 pt-1">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.7773837576874!2d-58.84274398543196!3d-27.47618912355605!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456c9788659f4b%3A0x3ea9ff0e2be2b443!2sBlas%20Parera%201662%2C%20W3410FTA%20Corrientes!5e0!3m2!1ses!2sar!4v1599098823998!5m2!1ses!2sar"
              width="100%"
              height="200px"
              frameborder="0"
              style="border: 0"
              allowfullscreen=""
              aria-hidden="false"
              tabindex="0"
            ></iframe>
          </div>
        </div>
      </footer>
</body>
</html>