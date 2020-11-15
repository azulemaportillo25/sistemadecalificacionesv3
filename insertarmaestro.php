<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php'; //donde se encuentra la base de datos

 //nombre de mi tabla
 DB::table('alumno')->insert([
    'nombre_completo' => $_POST["nombre_completo"],
    'nombre_usuario' => $_POST["nombre_usuario"],
    'correo' => $_POST["correo"],
    'contra' => $_POST["contra"],
]);
echo "Sus datos se guardaron correctamente";