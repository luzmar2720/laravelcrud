<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    
    protected $table="productos";
    protected $primaryKey="id";
    //opcional
    protected $fillable=["producto","descripcion","precio","cantidad"];
}
