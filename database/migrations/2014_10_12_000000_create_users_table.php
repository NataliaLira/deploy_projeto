<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'users';

    /**
     * Run the migrations.
     * @table users
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 200);
            $table->string('sobrenome', 200);
            $table->string('email', 100);
            $table->string('password', 200);
            $table->integer('cep');
            $table->string('endereco', 200)->nullable();
            $table->string('numero', 45)->nullable();
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100)->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('estado', 100)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->tinyInteger('nivel_user')->nullable();
            $table->string('email_verified_at', 45)->nullable();
            $table->string('telefone', 45)->nullable();

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
