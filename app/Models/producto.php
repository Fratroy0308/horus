<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;
    protected $fillable = ['proveedor_id', 'producto', 'descripcion', 'talla', 'precio'];
    //protected $guarded = ['id', '_token'];
    public $timestamps = false;

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class);
    }


}
