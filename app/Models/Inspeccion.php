<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspeccion extends Model
{
    use HasFactory;

    protected $table = 'inspecciones';

    protected $fillable = [
        'fecha',
        'idextintor',
        'proximainspeccion',
        'user_id',
    ];

    public function extintor()
    {
        return $this->belongsTo(Extintor::class, 'idextintor');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
