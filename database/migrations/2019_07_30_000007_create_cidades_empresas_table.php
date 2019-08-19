<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCidadesEmpresasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'cidades_empresas';

    /**
     * Run the migrations.
     * @table cidades_empresas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('cidades_id');
            $table->unsignedInteger('cadastroEmpresas_id');

            $table->index(["cadastroEmpresas_id"], 'fk_cidades_has_cadastroEmpresas_cadastroEmpresas1_idx');

            $table->index(["cidades_id"], 'fk_cidades_has_cadastroEmpresas_cidades1_idx');


            $table->foreign('cidades_id', 'fk_cidades_has_cadastroEmpresas_cidades1_idx')
                ->references('id')->on('cidades')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('cadastroEmpresas_id', 'fk_cidades_has_cadastroEmpresas_cadastroEmpresas1_idx')
                ->references('id')->on('empresas')
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
