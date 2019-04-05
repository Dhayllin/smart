<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->string('cpf')->nullable();
            $table->string('rg')->nullable();
            $table->string('orgao_emissor')->nullable();
            $table->string('nacionalidade')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('profissao')->nullable();            
            $table->string('plano')->nullable();  
            $table->string('cnpj')->nullable();  
            $table->string('razao_social')->nullable();  
            $table->string('active')->nullable(); 
            $table->timestamp('email_verified_at')->nullable();
            // $table->string('responsavel_id')->unsigned(); 
            // ENDEREÇO ESTÁ NOS CONTACTS
            $table->integer('contact_id')->unsigned();             
            $table->integer('person_type_id')->unsigned(); 
            $table->rememberToken();
            $table->timestamps();

            //$table->foreign('responsavel_id')->references('id')->on('responsavels')->onDelete('cascade');
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
        Schema::dropIfExists('clients');
    }
}
