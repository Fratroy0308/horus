<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class proveedor extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = ['proveedor', 'correo', 'telefono', 'direccion'];
    //protected $guarded = ['id', '_token'];
    public $timestamps = false;


    
}
