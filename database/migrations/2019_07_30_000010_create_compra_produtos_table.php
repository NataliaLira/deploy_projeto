<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompraProdutosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'compra_produtos';

    /**
     * Run the migrations.
     * @table compra_produtos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('compra_id');
            $table->unsignedInteger('produtos_id');
            $table->decimal('preco', 10, 2)->nullable();

            $table->index(["compra_id"], 'fk_compra_has_produtos_compra1_idx');

            $table->index(["produtos_id"], 'fk_compra_has_produtos_produtos1_idx');


            $table->foreign('compra_id', 'fk_compra_has_produtos_compra1_idx')
                ->references('id')->on('compras')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('produtos_id', 'fk_compra_has_produtos_produtos1_idx')
                ->references('id')->on('produtos')
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
