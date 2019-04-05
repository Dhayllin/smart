<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCulpritsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('culprits', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();           
            $table->string('nacionalidade')->nullable();
            $table->string('profissao')->nullable();
            $table->string('rg')->nullable();
            $table->string('orgao_emissor')->nullable();
            $table->string('cpf')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('active')->nullable();
            $table->string('razao_social')->nullable();
            // ENDEREÇO ESTÁ NOS CONTACTS
            $table->integer('contact_id')->unsigned();
            $table->integer('person_type_id')->unsigned();                 
            $table->timestamps();

            $table->foreign('contact_id')->references('id')->on('contacts')->onDelete('cascade'); 
            $table->foreign('person_type_id')->references('id')->on('person_types')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('culprits');
    }
}
