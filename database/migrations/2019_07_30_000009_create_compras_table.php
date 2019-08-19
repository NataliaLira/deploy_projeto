<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'compras';

    /**
     * Run the migrations.
     * @table compras
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->bigInteger('numero_pedido')->nullable();
            $table->string('comprador', 200)->nullable();
            $table->string('compra_realizada', 200)->nullable();
            $table->decimal('preco', 10, 2)->nullable();
            $table->string('modo_pagamento', 50)->nullable();
            $table->date('data_compra')->nullable();
            $table->unsignedInteger('users_id');

            $table->index(["users_id"], 'fk_compra_usuarios1_idx');

            $table->unique(["id"], 'id_UNIQUE');


            $table->foreign('users_id', 'fk_compra_usuarios1_idx')
                ->references('id')->on('users')
                ->onDelete('no action')
                ->onUpdate('no action');
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
