<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'usuarios';

    /**
     * Run the migrations.
     * @table usuarios
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 200);
            $table->string('sobrenome', 200);
            $table->string('email', 100);
            $table->string('senha', 200);
            $table->integer('cep');
            $table->string('endereço', 200)->nullable();
            $table->string('numero', 45)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->date('dataNascimento')->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->tinyInteger('nivelUsuario')->nullable();
            $table->tinyInteger('newsletter')->nullable();

            $table->unique(["id"], 'id_UNIQUE');

            $table->unique(["email"], 'email_UNIQUE');
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
