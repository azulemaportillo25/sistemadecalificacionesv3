<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php'; //donde se encuentra la base de datos

    echo <<<_Uno
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
                <title>Ver calificacion</title>
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
                            <p class="has-background-danger-dark title is-1 has-text-link is-italic has-text-centered">Bienvenido a la escuela "Alcatraz"</p>
                        </div>
                        <div class="column">
                            <div class="columns is-mobile">
                                <div class="column is-4 is-offset-1">
                                    <figure class="image is-128x128"><img src="imagenes/morados.jpg" class="imagen"></figure>
                                </div>
                           </div>
                        </div>
                    </div>
                </div> 
                <br>
                <br>
                <div class="centrado"><button class="button is-success is-outlined"><a href='index.html'>Volver a la página de inicio</a></button></div>
                <br><br>
_Uno;

$subir_cali = DB::table('subir_cali')->get();

foreach ($subir_cali as $colum) {
    echo <<<_Consultarcali
    <div class="table-container">
        <table class="table has-background-success tabla3 centrarform">
            <thead class="has-background-info">
                <tr class="tabla4">
                    <th>Nombre completo del alumno</th>
                    <th>Materia 1</th>
                    <th>Calificación 1</th>
                    <th>Materia 2</th>
                    <th>Calificación 2</th>
                    <th>Materia 3</th>
                    <th>Calificación 3</th>
                </tr>
            </thead>
            <tr> 
                <td>$colum->nombre_alumno</td>
                <td>$colum->materia_uno</td>
                <td>$colum->calificacion_uno</td>
                <td>$colum->materia_dos</td>
                <td>$colum->calificacion_dos</td>
                <td>$colum->materia_tres</td>
                <td>$colum->calificacion_tres</td>
            </tr>
        </table>
    </div>
_Consultarcali;
    echo '<br>';
    echo '<br>';
}
    echo <<<_Uno
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

        </body>
      </html>
_Uno;
?>