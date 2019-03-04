<?php

namespace ProductApp;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'short', 'body',
    ];
}
//los campos de la base de datos