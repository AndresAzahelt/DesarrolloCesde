<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Web Bootstrap</title>
         <link rel="stylesheet" href="css/normalize.css"/>
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <link rel="stylesheet" href="css/Estilos.css"/>
    </head>
    <body>
        <!--Cabecera-->
        <header>
            <nav id="barra" class="navbar navbar-light shadow mb-5">
                <a class="navbar-brand" href="#">
                    <img id="logo" src="img/logosh.png" class="d-inline-block align-top" alt="">
                </a>
            </nav>
        </header>
        <!--Cuerpo -->
        <section>
            <div class="container">
                <div class="registro">
                    <img class="img-fluid" src="img/logosh.png" alt="">
                </div>
                <form class="mt-5 my-5 shadow p-3 mb-5 bg-white rounded">
                    <h3 class="titulo-form">REGISTRO DE USUARIO</h3>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="apellido">Apellidos</label>
                            <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="apellido">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputState">País</label>
                            <select id="inputState" class="form-control" name="pais">
                                <option value="colombia" selected>Colombia</option>
                                <option value="Brasil">Brasil</option>
                                <option value="Japon">Japón</option>
                                <option value="Canada">Canada</option>
                            </select>
                        </div> 
                        <div class="form-group col-md-3">
                            <label for="inputState">Departamento</label>
                            <select id="inputState" class="form-control" name="departamento">
                                <option value="Antioquia" selected>Antioquia</option>
                                <option value="Arauca">Arauca</option>
                                <option value="Bolivar">Bolivar</option>
                                <option value="Caldas">Caldas</option>
                            </select>
                        </div> 
                       <div class="form-group col-md-3">
                            <label for="inputState">Ciudad</label>
                            <select id="inputState" class="form-control" name="ciudad">
                                <option value="Medellin" selected>Medellín</option>
                                <option value="Monteria">Monteria</option>
                                <option value="Tunja">Tunja</option>
                                <option value="Manizales">Manizales</option>
                            </select>
                        </div> 
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" placeholder="Telefono" name="telefono">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="dirección">Dirección</label>
                            <input type="text" class="form-control" id="direccion" placeholder="1234 Main St" name="direccion">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electronico</label>
                        <input type="email" class="form-control" id="email" placeholder="kurs@gmail....." name="Correo">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terminos" name="acepta">
                            <label class="form-check-label" for="gridCheck">
                              Acepta Terminos y condiciones.
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-enviar">Enviar</button>
              </form>
            </div>
        </section>
        <!--Pie de página-->
        <footer id="footer-fondo">
            <div class="container-fluid">
                    <div class="row text-center footer-info1">
                            <div class="col align-self-center">
                                    <h4>¡Conectese con nosostros en nuestras redes sociales!</h4>
                            </div>
                    </div>
            </div>
            <div class="container">
                <div class="row mt-5  text-center footer-info2">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <h4>Andrés Mendoza</h4>
                        <label for="">__________________</label>
                        <p>
                            <i>
                                    El nitrógeno de nuestro ADN, el calcio de nuestros dientes, el hierro de nuestra sangre, el carbono de nuestras tartas de manzana se hicieron en el interior de estrellas que colapsaron.
                            </i>
                        </p>
                        <p>
                            <i>
                                    ESTAMOS HECHOS DE MATERIA ESTELAR.
                            </i>
                        </p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <h4>Redes Sociales</h4>
                        <label for="">__________________</label>
                        <p><img class="icon-w" src="img/icon-facebook.png" alt=""><i> Facebook</i></p>
                        <p><img class="icon-w" src="img/icon-youtube.png" alt=""><i> Youtube</i></p>
                        <p><img class="icon-w" src="img/icon-twitter.png" alt=""><i> Twitter</i></p>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
                        <h4>Contacto</h4>
                        <label for="">__________________</label>
                        <p> 
                            <img class="icon-w" src="img/icon-home.png" alt=""><i>Robledo Kennedy, Medellín, Colombia</i> 
                        </p>
                        <p>
                            <img  src="img/icon-correo.png" alt=""><i>Andres_tez@hotmail.com</i> 
                        </p>
                        <p>
                            <img class="icon-w" src="img/icon-what.png" alt=""><i>+ 57 351 21 46</i> 
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row text-center footer-info3">
                    <div class="col align-self-center">
                        <p id="copy-color">© Todos los derechos 2018 Copyright: Elaborado por Andrés Mendoza.</p>
                    </div>
                </div>
            </div>
        </footer>
        <?php
        // put your code here
        ?>
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
