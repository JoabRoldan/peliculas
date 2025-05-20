<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class t_datos extends Model
{
    protected $table = 't_datos';
    public $timestamps = false;
    protected $fillable = ['nombre', 'correo', 'contraseña', 'fecha_de_nacimiento'];


    use HasFactory;
}
