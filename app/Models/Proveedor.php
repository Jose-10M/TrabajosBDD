<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;
    

    protected $table = 'proveedores'; // Especifica la tabla correcta

    protected $fillable = ['nombre'];
}
