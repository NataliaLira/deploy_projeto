<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpresasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'empresas';

    /**
     * Run the migrations.
     * @table empresas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 200)->nullable();
            $table->string('endereço', 200)->nullable();
            $table->string('numero', 200)->nullable();
            $table->string('complemento', 200)->nullable();
            $table->integer('cep')->nullable();
            $table->string('bairro', 200)->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('telefone', 45)->nullable();
            $table->string('latitude', 200)->nullable();
            $table->string('longitude', 50)->nullable();

            $table->unique(["id"], 'id_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
     {
       Schema::dropIfExists($this->tableName);
     }
}
