<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products_cmp';
    protected $primaryKey = 'id';
    protected $fillable = [
            'name',
            'cantidad',
            'descripcion',
            'precio',
            'ruta',
            'activo',
            'user_pub'
        ];
}