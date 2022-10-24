<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\Models\Estudiantes;

class EstudiantesController extends Controller
{
    public function listar() {
        try {
            $listar = Estudiantes::with('tipo_documento','curso')->get();
        
            return response()->json([
                'success' => true, 
                'data' => $listar
            ], 200);

        } catch (Error $err) {
            return response()->json([
                'success' => false,
                'data'=>json_encode($err->getMessage())
            ], 500);
        }
        
    }

    public function crear(Request $request) {
        try {
            $crear = Estudiantes::create([
                'nombre' => $request->nombre,
                'apellido' => $request->apellido,
                'telefono' => $request->telefono,
                'direccion' => $request->direccion,
                'email' => $request->email,
                'numero_documento' => $request->numero_documento,
                'activo' => $request->activo,
                'id_curso' => $request->id_curso,
                'id_tipo_documento' => $request->id_tipo_documento
            ]);

            return response()->json([
                'success' => true,
                'message' =>'Alumno creado',
                'data' => $crear
            ], 201);

        } catch (Error $err) {
            return response()->json([
                'success' => false,
                'data'=>json_encode($err->getMessage())
            ], 500);
        }        
    }

    public function actualizar(Request $request) {
        try {
            $actualizar = Estudiantes::where('id', $request->id)
                                        ->update([
                                            'nombre' => $request->nombre,
                                            'apellido' => $request->apellido,
                                            'telefono' => $request->telefono,
                                            'direccion' => $request->direccion,
                                            'email' => $request->email,
                                            'numero_documento' => $request->numero_documento,
                                            'activo' => $request->activo,
                                            'id_curso' => $request->id_curso,
                                            'id_tipo_documento' => $request->id_tipo_documento
                                        ]);

            return response()->json([
                'success' => true,
                'message' => 'Alumno actualizado con éxito'
            ], 201);

        } catch (Error $err) {
            return response()->json([
                'success' => false,
                'data'=>json_encode($err->getMessage())
            ], 500);
        }
    }

    public function cambiarEstado(Request $request) {
        try {
            $estado = Estudiantes::where('id', $request->id)
                                ->update([
                                    'activo' => $request->activo
                                ]);
            
            return response()->json([
                'success' => true,
                'message' => 'Estado actualizado con éxito'
            ]);
            
        } catch (Error $err) {
            return response()->json([
                'success' => false,
                'data'=>json_encode($err->getMessage())
            ], 500);
        }
    }
}
