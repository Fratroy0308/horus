<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;
    protected $fillable = ['proveedor', 'correo', 'telefono', 'direccion'];
    //protected $guarded = ['id', '_token'];
    public $timestamps = false;
}
