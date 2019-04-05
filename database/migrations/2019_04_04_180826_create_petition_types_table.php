<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petition_types', function (Blueprint $table) {
            $table->increments('id');  
            $table->string('title')->nullable();  
            $table->integer('active')->nullable(); 
            $table->integer('type_header_id')->unsigned();
            $table->integer('petition_section_id')->unsigned();
            $table->integer('type_address_id')->unsigned();
            $table->integer('type_author_id')->unsigned();
            $table->integer('type_culprit_id')->unsigned();
            $table->integer('type_name_action_id')->unsigned();
            $table->integer('type_num_processo_id')->unsigned();          
            $table->timestamps();

            $table->foreign('type_header_id')->references('id')->on('type_headers')->onDelete('cascade'); 
            $table->foreign('petition_section_id')->references('id')->on('petition_sections')->onDelete('cascade'); 
            $table->foreign('type_address_id')->references('id')->on('type_addresses')->onDelete('cascade'); 
            $table->foreign('type_author_id')->references('id')->on('type_authors')->onDelete('cascade'); 
            $table->foreign('type_culprit_id')->references('id')->on('type_culprits')->onDelete('cascade'); 
            $table->foreign('type_name_action_id')->references('id')->on('type_name_actions')->onDelete('cascade');
            $table->foreign('type_num_processo_id')->references('id')->on('type_num_processos')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petition_types');
    }
}
