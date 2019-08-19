<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'produtos';

    /**
     * Run the migrations.
     * @table produtos
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nome', 200)->nullable();
            $table->string('descricao')->nullable();
            $table->decimal('preco', 10, 2)->nullable();
            $table->string('imagem', 200)->nullable();
            $table->string('quantidade_estoque', 45)->nullable();
            $table->Biginteger('categorias_id')->references('id')->on('categorias');

            $table->index(["categorias_id"], 'fk_produtos_categorias1_idx');

            $table->unique(["id"], 'id_UNIQUE');


            // $table->foreign('categorias_id', 'fk_produtos_categorias1_idx')
            //     ->references('id')->on('categorias')
            //     ->onDelete('no action')
            //     ->onUpdate('no action');
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
