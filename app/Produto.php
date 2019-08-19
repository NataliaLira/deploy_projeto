<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $timestamps = false;
    protected $fillable = ['nome', 'descricao', 'preco', 'quantidadeEstoque', 'categoria', 'imagem'];
    protected $guarded = ['id'];
    protected $table = 'produtos';
}
