<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Communication extends Model
{
    protected $table = 'communication_cmp';
    protected $primaryKey = 'id';
    protected $fillable = [
            'mensaje',
            'id_user',
            'id_fab',
            
        ];
}