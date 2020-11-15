<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php';

//uso del laravel
$user = DB::table('usuarios')
->leftJoin('perfiles', 'usuarios.idperfil', '=', 'perfiles.idperfil')
->where('usuarios.idusuarios', $_GET['idusuario'])->first();

$users = DB::table('subir_cali')
->leftJoin('alumnos', 'subir_cali.idalumno', '=', 'alumnos.idalumno')
->get();

    echo <<<_UNO
        <!DOCTYPE html>
        <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
                <title>Consultar registros de calificacion</title>
                <link rel="stylesheet" href="colors.css">
            </head>
            <body class="colorpagina">
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
_UNO;

foreach ($users as $colum) {
    echo <<<_Consultarcali
    <div class="table-container">
        <table class="table has-background-success tabla centrarform">
            <thead class="has-background-warning">
                <tr class="tabla2 centrado">
                    <th>#num.</th>
                    <th>Nombre completo del alumno</th>
                    <th>Materia 1</th>
                    <th>Calificación 1</th>
                    <th>Materia 2</th>
                    <th>Calificación 2</th>
                    <th>Materia 3</th>
                    <th>Calificación 3</th>
                    <th colspan='2'>Operaciones</th>
                </tr>
            </thead>
            <tr class='centrado'> 
                <td class='centrado'>$colum->idsubir_cali</td>
                <td class='centrado'>$colum->nombre_alumno</td>
                <td class='centrado'>$colum->materia_uno</td>
                <td class='centrado'>$colum->calificacion_uno</td>
                <td class='centrado'>$colum->materia_dos</td>
                <td class='centrado'>$colum->calificacion_dos</td>
                <td class='centrado'>$colum->materia_tres</td>
                <td class='centrado'>$colum->calificacion_tres</td>
                <td class='centrado'><a class='button' href='delete.php?id={$colum->idsubir_cali}'>ELIMINAR</a></td>
                <td>
                    <form action="update.php" method="post">
                        <input id="idsubir_cali" type="text" name="idsubir_cali" value="{$colum->idsubir_cali}" hidden>
                        <label  size="3">Nombre:</label>
                        <input id="nombre_alumno" type="text" name="nombre_alumno" size="3">
                        <br>
                        <label  size="3">Materia 1:</label>
                        <input id="materia_uno" type="text" name="materia_uno" size="3">
                        <br>
                        <label  size="3">Calificación 1:</label>
                        <input id="calificacion_uno" type="text" name="calificacion_uno" size="3">
                        <br>
                        <label  size="3">Materia 2:</label>
                        <input id="materia_dos" type="text" name="materia_dos" size="3">
                        <br>
                        <label  size="3">Calificación 2:</label>
                        <input id="calificacion_dos" type="text" name="calificacion_dos" size="3">
                        <br>
                        <label  size="3">Materia 3:</label>
                        <input id="materia_tres" type="text" name="materia_tres" size="3">
                        <br>
                        <label  size="3">Calificación 3:</label>
                        <input id="calificacion_tres" type="text" name="calificacion_tres" size="3">
                        <br>
                        <input class="button"  type="submit" value="Actualizar">
                    </form>
                </td>
            </tr>
        </table>
    </div>
_Consultarcali;
}
echo "<div class='centrado'><button class='button is-danger is-rounded'><a href='index.html'>REGRESAR a la página inicial</a></button></div>";
echo "<br>";

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