<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php'; //donde se encuentra la base de datos

DB::table('subir_cali')
->where('idsubir_cali', $_POST['idsubir_cali'])
->update([
    'nombre_alumno' => $_POST['nombre_alumno'],
    'materia_uno' => $_POST['materia_uno'],
    'calificacion_uno' => $_POST['calificacion_uno'],
    'materia_dos' => $_POST['materia_dos'],
    'calificacion_dos' => $_POST['calificacion_dos'],
    'materia_tres' => $_POST['materia_tres'],
    'calificacion_tres' => $_POST['calificacion_tres'],

]);

echo "Se Actualizo con el número: {$_POST['idsubir_cali']}
<a href='consultarcali.php'>Regresar</a>";