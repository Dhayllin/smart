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
            $table->string('header_address',2)->nullable();  
            $table->string('header_num_process',2)->nullable();  
            $table->string('header_author',2)->nullable();  
            $table->string('header_culprit',2)->nullable();  
            $table->string('header_name_action',2)->nullable();             
            $table->boolean('active')->nullable();            
            $table->timestamps();
            $table->softDeletes();            
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
