<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    public $timestamps = false;
    protected $fillable = ['tipoMaterial'];
    protected $guarded = ['id'];
    protected $table = 'materiais';
}
