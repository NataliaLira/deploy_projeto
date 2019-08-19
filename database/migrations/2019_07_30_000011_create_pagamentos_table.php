<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagamentosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'pagamentos';

    /**
     * Run the migrations.
     * @table pagamentos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('modo_pagamento', 200)->nullable();
            $table->unsignedInteger('compra_id');

            $table->index(["compra_id"], 'fk_pagamento_compra1_idx');


            $table->foreign('compra_id', 'fk_pagamento_compra1_idx')
                ->references('id')->on('compras')
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
