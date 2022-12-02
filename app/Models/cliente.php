<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class cliente extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = ['nombre', 'correo', 'telefono', 'direccion'];
    public $timestamps = false;

    public function ventas()
    {
        return $this->hasMany(Venta::class);
    }

}
