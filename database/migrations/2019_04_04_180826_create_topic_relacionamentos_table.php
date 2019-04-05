<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTopicRelacionamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_relacionamentos', function (Blueprint $table) {
            $table->increments('id');            
            $table->string('subtopico')->nullable(); 
            $table->integer('petition_type_id')->unsigned();
            $table->integer('petition_section_id')->unsigned();
            $table->integer('petition_demand_id')->unsigned();
            $table->timestamps();

            $table->foreign('petition_type_id')->references('id')->on('petition_types')->onDelete('cascade');
            $table->foreign('petition_section_id')->references('id')->on('petition_sections')->onDelete('cascade');
            $table->foreign('petition_demand_id')->references('id')->on('petition_demands')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('topic_relacionamentos');
    }
}
