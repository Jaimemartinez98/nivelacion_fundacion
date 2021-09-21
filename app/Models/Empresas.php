<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    use HasFactory;

    protected $table = 'empresas';

    protected $fillable = [
      'id','nombre_empresa','direccion','nit','telefono','correo_contacto','updated_at','created_at'
    ];
}
