<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extintor extends Model
{
    use HasFactory;

    protected $table = 'extintores'; // Nombre correcto de la tabla en la base de datos

    protected $fillable = [
        'capacidad',
        'estado',
        'fechafabricacion',
        'idproveedor',
        'idubicacion',
        'user_id',
    ];

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'idproveedor');
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'idubicacion');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function inspecciones()
    {
        return $this->hasMany(Inspeccion::class, 'idextintor');
    }

    public function recargas()
    {
        return $this->hasMany(Recarga::class, 'idextintor');
    }
}
