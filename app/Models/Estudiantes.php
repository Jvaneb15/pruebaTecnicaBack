<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\TipoDocumento;
use App\Models\Curso;

class Estudiantes extends Model
{
    use HasFactory;
    protected $table = 'alumno';

    protected $fillable = ['nombre','apellido','telefono','direccion','email','numero_documento', 'activo','id_curso','id_tipo_documento'];

    public function tipo_documento(){
    	return $this->belongsTo(TipoDocumento::class, 'id_tipo_documento', 'id');
    }

    public function curso(){
    	return $this->belongsTo(Curso::class, 'id_curso', 'id');
    }
}
