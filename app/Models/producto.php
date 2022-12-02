<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class producto extends Model
{
    use HasFactory;
    use SoftDeletes;
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

    protected $dates = ['deleted_at'];

}
