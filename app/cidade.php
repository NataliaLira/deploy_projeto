<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cidade extends Model
{
    public $timestamps = false;
    protected $fillable = ['cidade','imagem'];
    protected $guarded = ['id'];
    protected $table = 'cidades';
}
