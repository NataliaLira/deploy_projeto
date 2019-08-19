<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriaisEmpresasTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $tableName = 'materiais_empresas';

    /**
     * Run the migrations.
     * @table materiais_empresas
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('materiaisReciclados_id');
            $table->unsignedInteger('cadastroEmpresas_id');

            $table->index(["materiaisReciclados_id"], 'fk_materiaisReciclados_has_cadastroEmpresas_materiaisRecicl_idx');

            $table->index(["cadastroEmpresas_id"], 'fk_materiaisReciclados_has_cadastroEmpresas_cadastroEmpresa_idx');


            $table->foreign('materiaisReciclados_id', 'fk_materiaisReciclados_has_cadastroEmpresas_materiaisRecicl_idx')
                ->references('id')->on('materiais')
                ->onDelete('no action')
                ->onUpdate('no action');

            $table->foreign('cadastroEmpresas_id', 'fk_materiaisReciclados_has_cadastroEmpresas_cadastroEmpresa_idx')
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
