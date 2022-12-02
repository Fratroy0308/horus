<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contacto extends Model
{
    use HasFactory;
    use SoftDeletes; 
    
    protected $fillable = ['nombre', 'correo', 'comentario'];
    //protected $guarded = ['id', '_token'];
    public $timestamps = false;
}
