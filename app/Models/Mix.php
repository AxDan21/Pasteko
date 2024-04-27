<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mix extends Model
{
    use HasFactory;

    protected $fillable = [
        'Descrip',
        'Cantidad',
        'Peso'
    ];

    public function producto(){
        return $this->hasMany(Producto::class);
    }

    public function armado(){
        return $this->hasOne(Armado::class);
    }
}
