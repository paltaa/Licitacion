<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Licit extends Model
{
     protected $table = 'Licits';
     protected $fillable = ['name', 'body', 'Makerid', 'Caduca' ];
}
