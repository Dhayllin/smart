<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petitions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('content')->nullable();
            $table->integer('petition_section_id')->unsigned();
            $table->integer('petition_type_id')->unsigned();
            $table->integer('petition_demand_id')->unsigned();            
            $table->integer('topic_id')->unsigned();
            $table->integer('client_id')->unsigned();
            $table->integer('address_id')->unsigned();
            $table->integer('culprit_id')->unsigned();
            $table->timestamps();

            $table->foreign('petition_section_id')->references('id')->on('petition_sections')->onDelete('cascade'); 
            $table->foreign('petition_type_id')->references('id')->on('petition_types')->onDelete('cascade'); 
            $table->foreign('petition_demand_id')->references('id')->on('petition_demands')->onDelete('cascade'); 
            $table->foreign('topic_id')->references('id')->on('topics')->onDelete('cascade'); 
            $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade'); 
            $table->foreign('address_id')->references('id')->on('addresses')->onDelete('cascade'); 
            $table->foreign('culprit_id')->references('id')->on('culprits')->onDelete('cascade'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petitions');
    }
}
