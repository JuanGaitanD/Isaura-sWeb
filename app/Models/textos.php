<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class textos extends Model
{
    protected $table = 'textos';
    protected $fillable = ['titulo', 'fecha', 'contenido', 'img', 'usado'];
}
