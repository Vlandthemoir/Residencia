<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Objetos extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_conectar',
        'nombre',
        'nombre_conectar',
    ];
        //sobreescritura de las convenciones
        protected $table = 'objetos';
        /**
        * The name of the "created at" column.
        * @var string
        */
        const CREATED_AT = 'fecha_creado';
        /**
        * The name of the "updated at" column.
        * @var string
        */
        const UPDATED_AT = 'fecha_modificado';
}
