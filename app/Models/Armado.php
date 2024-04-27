<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Armado extends Model
{
    use HasFactory;

    protected $fillable = [
        'Sabor',
        'TotalPastes',
    ];

    public function mix(){
        return $this->belongsTo(Mix::class);
    }

    public function inventario(){
        return $this->hasMany(Inventario::class);
    }
}