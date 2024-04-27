<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'Descrip',
        'Costo',
        'cantidad',
        'Marca',
        'UM',
        'Proveedor'
    ];

    public function mixes(){
        return $this->belongsToMany(Mix::class);
    }
}
