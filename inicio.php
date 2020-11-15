<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

//uso del laravel
$user = DB::table('usuarios')
->leftJoin('perfiles', 'usuarios.idperfil', '=', 'perfiles.idperfil')
->where('usuarios.idusuarios', $_GET['idusuario'])->first();

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
        <title>Subir Calificacion</title>
        <link rel="stylesheet" href="colors.css">
    </head>
    <body class="colorpagina3">
        <div data-role='header' id="encabezado">
            <div class="columns">
                <div class="column">
                    <div class="columns is-mobile">
                        <div class="column is-11 is-offset-6">
                            <figure class="image is-128x128"><img src="imagenes/flor-de-alcatraz-1.jpg" class="imagen"></figure>
                        </div>
                    </div>
                </div>
                <div class="column letra">
                    <p class="has-background-danger-dark title is-1 has-text-link is-italic has-text-centered ">Bienvenido a la escuela "Alcatraz"</p>
                </div>
                <div class="column">
                    <div class="columns is-mobile">
                        <div class="column is-4 is-offset-1">
                            <figure class="image is-128x128">
                                <img src="imagenes/morados.jpg" class="imagen">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <br>
        <br>

        <h2 class="title is-2 has-text-centered is-italic has-text-success-dark has-background-warning">Las calificaciones para los alumnos</h2>
        <br>

        <?php if ($user->nombreperfil == 'Profesor') { ?>
            
        <!--formulario para registrarse-->
        <div class="tile is-ancestor">
            <div class="tile is-vertical is-8 centrarform">
                <div class="tile">
                    <div class="tile is-parent is-vertical">
                        <article class="tile is-child notification has-background-success centrado">
                            <form action="insertarcali.php" method="post">
                                <label class="has-text-black" for="nombre_alumno">Nombre completo del alumno:</label>
                                <input class="input is-rounded is-danger" type="text" id="nombre_alumno" name="nombre_alumno">
                                <br>
                                <br>
                                <label class="has-text-black" for="materia_uno">Materia 1:</label>
                                <input class="input is-rounded is-danger" type="text" id="materia_uno" name="materia_uno">
                                <br>
                                <br>
                                <label class="has-text-black" for="calificacion_uno">Calificación de la Materia 1:</label>
                                <input class="input is-rounded is-danger" type="text" id="calificacion_uno" name="calificacion_uno">
                                <br>
                                <br>
                                <label class="has-text-black" for="materia_dos">Materia 2:</label>
                                <input class="input is-rounded is-danger" type="text" id="materia_dos" name="materia_dos">
                                <br>
                                <br>
                                <label class="has-text-black" for="calificacion_dos">Calificación de la Materia 2:</label>
                                <input class="input is-rounded is-danger" type="text" id="calificacion_dos" name="calificacion_dos">
                                <br>
                                <br>
                                <label class="has-text-black" for="materia_tres">Materia 3:</label>
                                <input class="input is-rounded is-danger" type="text" id="materia_tres" name="materia_tres">
                                <br>
                                <br>
                                <label class="has-text-black" for="calificacion_tres">Calificación de la Materia 3:</label>
                                <input class="input is-rounded is-danger" type="text" id="calificacion_tres" name="calificacion_tres">
                                <br>
                                <br>
                                <div class="centrado">
                                    <button class="button is-danger is-outlined"><a href="index.html">Página de Inicio</a></button>
                                    <button  type="submit" class="button is-link is-inverted is-outlined">Guardar datos</button>
                                    <button class="button is-link is-rounded"><a href="consultarcali.php">Consultar regístro de calificación</a></button>
                                </div>
                            </form>

                        </article>
                    </div>
                </div>
            </div>
        </div> 

        
        <?php } ?>


        
        <br>
        <?php if ($user->nombreperfil == 'Alumno') { ?>
 
        <div class="centrado">
            <button class="button is-primary is-outlined"><a href="vercalificacion.php">Click para ver sus calificaciones</a></button>
        </div>
        <br><br>

        <!--Pie de pagina-->
        <footer class="footer" id="piepag">
            <div class="content has-text-centered">
                <div class="columns is-gapless is-multiline is-mobile has-text-black">
                    <div class="column">Se brinda información de:</div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-1 is-offset-3 has-text-black">
                        <img src="imagenes/contacto.png" class="icon">
                        <p>Contacto:</p>
                    </div>
                    <div class="column is-4 is-offset-3 has-text-black">
                        <p>Azulema Portillo Laparra</p>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-1 is-offset-3 has-text-black">
                        <img src="imagenes/telefono.jpg" class="icon">
                        <p>Telefono:</p>
                    </div>
                    <div class="column is-4 is-offset-3 has-text-black">
                        <p>983-211-1951</p>
                    </div>
                </div>
                <div class="columns is-mobile">
                    <div class="column is-1 is-offset-3 has-text-black">
                        <img src="imagenes/Gmail_icon-icons.com_75706.png" class="icon img-fluid" alt="Responsive image">
                        <p>Correo:</p>
                    </div>
                    <div class="column is-4 is-offset-3 has-text-black">
                        <p>portilloazulema@gmail.com</p>
                    </div>
                </div>
                <div class="columns is-gapless is-multiline is-mobile">
                    <div class="column has-text-black">Hecho en México.</div>
                </div>
                <div class="columns is-gapless is-multiline is-mobile">
                    <div class="column has-text-black">Carrera de Programación en la Preparatoria Centro de Bachillerato Tecnológico Industrial y de Servicios no.253 "Miguel Hidalgo y Costilla".</div>
                </div>
            </div>
        </footer>

        <!--Pie de pagina 2-->
        <footer class="footer" id="piepag2">
            <div class="columns is-gapless is-multiline is-mobile">
                <div class="column has-text-black">
                    <!--link de facebook-->
                    <a href="https://m.facebook.com/"><img src="imagenes/facebook.png" class="icon2"></a>
                </div>
                <div class="column has-text-black">
                    <!--link de Gmail-->
                    <a href="https://www.google.com/intl/es/gmail/about/"><img src="imagenes/Gmail_icon-icons.com_75706.png" class="icon2"></a>
                </div>
                <div class="column has-text-black">
                    <!--link de Instagram-->
                    <a href="https://www.instagram.com/"><img src="imagenes/logotipo-instagram_1045-436.jpg" class="icon2"></a>    
                </div>
                <div class="column has-text-black">
                    <!--link de Twitter-->
                    <a href="https://twitter.com/login?lang=es"><img src="imagenes/twitter.png" class="icon2"></a>
                </div>
                <div class="column has-text-black">
                    <!--link de spotify-->
                    <a href="https://www.spotify.com/pe/"><img src="imagenes/spot.png" class="icon2"></a>
                </div>
                <div class="column has-text-black">
                    <!--link de youtube-->
                    <a href="https://www.youtube.com/"><img src="imagenes/youtube.png" class="icon2"></a>
                </div>
            </div>
        </footer>

        <?php } ?>

    </body>
</html>