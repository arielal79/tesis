<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<!--prueba bootstrap-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!--fin prueba-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
  integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
  integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
  integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/10753f982c.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="css/styles.css" />
<title>Nuevo Expediente</title>
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
    <h2 class="text-center">Nuevo Expediente</h2>
    <div class="row shadow">
      <div class="col-xl-4 col-lg-6 col-xs-12">
        <div class="dropdown p-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Inicio
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="index.php">Inicio</a>
          </div>
        </div>
        <div class="dropdown p-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Bandeja de pases
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="bandeja.php">Recibir</a>
            <a class="dropdown-item" href="#">Archivar</a>
            <a class="dropdown-item" href="#">enviar</a>
          </div>
        </div>
        <div class="dropdown p-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Expedientes
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="nuevo_exp.php">Nuevo</a>
            <a class="dropdown-item" href="consulta_exp.php">Consultar</a>
            <a class="dropdown-item" href="#">Buscar</a>
          </div>
        </div>
        <div class="dropdown p-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Usuarios
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="nuevo_usuario.php">Nuevo</a>
            <a class="dropdown-item" href="edit_usuario.php">Editar</a>
            <a class="dropdown-item" href="#">Buscar</a>
          </div>
        </div>
        <div class="dropdown p-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Informes
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Por usuarios</a>
            <a class="dropdown-item" href="#">Por expedientes</a>

          </div>
        </div>
        <div class="dropdown p-3">
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
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
          <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Cerrar Sesión
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Cerrar Sesión</a>

          </div>
        </div>
      </div>
      <div class="col-xl-8 col-lg-6 col-xs-12">
        <div class="alert bg-light text-dark shadow">

          <!--nuevo form-->
          <form method="POST" action="insertar_expediente.php">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="nume_ex">N° Expediente</label>
                <input class="form-control" type="number" id="nume_ex" name="nume_ex" placeholder="numero incremental"
                  maxlength="10" />
              </div>
              <div class="form-group col-md-4">
                <label for="reparticion">Repartición</label>
                <select id="reparticion" class="form-control" name="reparticion">
                  <option selected>reparticion1</option>
                  <option>reaparticion2</option>
                  <option>reaparticion3</option>
                </select>
              </div>
              <!--btn repar-->
              <div class="form-group col-md-2 p-2">
                <label for="reparticion"></label>
                <button type="button" class="btn btn-secondary form-control" data-toggle="modal"
                  data-target="#exampleModal2">
                  Agregar
                </button>
              </div>
              <!--fin btn repar-->
            </div>


            <div class="form-row">
              <div class="form-group col-md-3">
                <label for="rubro">Rubro</label>
                <select id="rubro" class="form-control" name="rubro">
                  <option>Rubro</option>
                  <option>Rubro2</option>
                  <option>Rubro3</option>
                  <option>Rubro4</option>
                  <option>Rubro5</option>
                </select>
              </div>
              <div class="form-group col-md-2 p-2">
                <label for="rubro"></label>
                <button type="button" class="btn btn-secondary form-control" data-toggle="modal"
                  data-target="#exampleModal1">
                  Agregar
                </button>
              </div>
              <div class="form-group col-md-3">
                <label for="iniciador">Iniciador</label>
                <select id="iniciador" class="form-control" name="iniciador">
                  <option selected>Iniciador</option>
                  <option>Iniciador</option>
                  <option>Iniciador</option>
                  <option>Iniciador</option>
                  <option>Iniciador</option>
                  <option>Iniciador</option>
                </select>
              </div>
              <div class="form-group col-md-2 p-2">
                <label for="iniciador"></label>
                <button type="button" class="btn btn-secondary form-control" data-toggle="modal"
                  data-target="#exampleModal">
                  Agregar
                </button>
              </div>

            </div>
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="fojas">Fojas </label>
                <input type="number" id="fojas" name="fojas" class="form-control" placeholder="Cantidad de fojas">
              </div>
              <div class="form-group col-md-4">
                <label for="fech_inicio">Fecha de inicio</label>
                <input type="date" class="form-control" id="fech_inicio" name="fech_inicio">
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-8">
                <label for="concepto">Concepto</label>
                <textarea class="form-control" id="concepto" name="concepto" placeholder="Descripción del Expediente"></textarea>
              </div>
            </div>

            <button type="submit" class="btn btn-secondary">Guardar e imprimir</button>
            <button class="btn btn-secondary">Cancelar</button>
            <a href="index.php" class="btn btn-secondary">Volver</a>
          </form>
          <!--Fin nuevo form-->
        </div>
      </div>
    </div>
  </div>
  <footer class="contanier-fluid mt-5 bg-dark">
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
          width="100%" height="200px" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false"
          tabindex="0"></iframe>
      </div>
    </div>
  </footer>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agragar Iniciador</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">


          <form method="POST" action="#">

            <label for="iniciador">Iniciador</label>
            <input type="text" class="form-control" id="iniciador" placeholder="Iniciador" maxlength="20" /><br>
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" placeholder="Iniciador" maxlength="20" /><br>
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" id="apellido" placeholder="Iniciador" maxlength="20" /><br>
            <label for="cargo">Cargo</label>
            <input type="text" class="form-control" id="cargo" placeholder="Iniciador" maxlength="20" />
            <br>
            <label for="concepto">Descripción</label>
            <br />
            <textarea class="form-control" id="concepto" minlength="10" maxlength="100" rows="5" cols="60"
              placeholder="Descripción del Iniciador"></textarea>
            <br>
            
          </form>


        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Guardar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        </div>
      </div>
    </div>
  </div>
  <!-- Modal rubro -->
  <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Agragar Rubro</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#">

            <label for="rubro">Rubro</label>
            <input type="text" id="rubro" placeholder="Rubro" maxlength="20" />
            <br>
            <label for="concepto">Descripción</label>
            <br />
            <textarea id="concepto" minlength="10" maxlength="100" rows="5" cols="60"
              placeholder="Descripción del rubro"></textarea>
            <br>

          </form>


        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Guardar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        </div>
      </div>
    </div>
  </div>
  <!-- Modal final rubro -->
  <!-- Modal reparti-->
  <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel2">Agragar Reparticion</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="#">

            <label for="rubro">Reparticion</label>
            <input type="text" id="reparticion" placeholder="Repartición" maxlength="20" />
            <br>
            <label for="concepto">Descripción</label>
            <br />
            <textarea id="concepto" minlength="10" maxlength="100" rows="5" cols="60"
              placeholder="Descripción del reparticion"></textarea>
            <br>

          </form>


        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Guardar</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>

        </div>
      </div>
    </div>
  </div>
  <!-- Modal final reparti -->
</body>

</html>