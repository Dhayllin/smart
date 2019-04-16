<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_sections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('petition_type_id')->unsigned(); 
            $table->integer('petition_section_id')->unsigned();   
            $table->timestamps();

            $table->foreign('petition_type_id')->references('id')->on('petition_types')->onDelete('cascade');        
            $table->foreign('petition_section_id')->references('id')->on('petition_sections')->onDelete('cascade');              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_sections');
    }
}
