<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class empresa extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome','endereço','numero','complemento','cep','bairro','estado','telefone','latitude','longitude'];
    protected $guarded = ['id'];
    protected $table = 'empresas';
}
