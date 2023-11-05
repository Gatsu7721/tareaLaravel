<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DatabaseConnectionController extends Controller
{
    public function testConnection()
    {
        try {
            DB::connection()->getPdo();
            // La conexión a la base de datos fue exitosa
            return response()->json(['message' => 'Conexión exitosa a la base de datos'], 200);
        } catch (\Exception $ex) {
            // Error en la conexión a la base de datos
            return response()->json(['message' => 'Error en la conexión a la base de datos: ' . $ex->getMessage()], 500);
        }
    }
}
