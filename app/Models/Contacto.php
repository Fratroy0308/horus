<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    use HasFactory; 
    
    protected $fillable = ['nombre', 'correo', 'comentario'];
    //protected $guarded = ['id', '_token'];
    public $timestamps = false;
}
