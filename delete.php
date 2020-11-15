<?php
use Illuminate\Database\Capsule\Manager as DB;

require 'vendor/autoload.php';
require 'config/database.php'; //donde se encuentra la base de datos

DB::table('subir_cali')->where('idsubir_cali', $_GET['id'])->delete();

echo "Se elimino con el id: {$_GET['id']}
<a class='button' href='consultarcali.php'>REGRESAR</a>";