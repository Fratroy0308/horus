<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $fillable = ['idproveedor', 'producto', 'descripcion', 'talla', 'precio'];
    //protected $guarded = ['id', '_token'];
    public $timestamps = false;
}
