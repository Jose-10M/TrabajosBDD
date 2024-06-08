<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recarga extends Model
{
    use HasFactory;

    protected $table = 'recargas';

    protected $fillable = [
        'fecha',
        'idextintor',
        'proximarecarga',
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
