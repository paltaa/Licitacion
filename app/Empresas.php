<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresas extends Model
{
    protected $fillable =[
    'name',
    'email',
    'password',
    'rut',
    'phone',
    'rubro',
    'Razon_Social'

    ]
}
