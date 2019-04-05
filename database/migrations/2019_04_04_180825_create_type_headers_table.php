<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTypeHeadersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_headers', function (Blueprint $table) {
            $table->increments('id');  
            $table->integer('header_address_id')->unsigned();
            $table->integer('header_author_id')->unsigned();
            $table->integer('header_culprit_id')->unsigned();
            $table->integer('header_name_action_id')->unsigned();
            $table->integer('header_num_processo_id')->unsigned();          
            $table->timestamps();          
            
            $table->foreign('header_address_id')->references('id')->on('header_addresses')->onDelete('cascade'); 
            $table->foreign('header_author_id')->references('id')->on('header_authors')->onDelete('cascade'); 
            $table->foreign('header_culprit_id')->references('id')->on('header_culprits')->onDelete('cascade'); 
            $table->foreign('header_name_action_id')->references('id')->on('header_name_actions')->onDelete('cascade');
            $table->foreign('header_num_processo_id')->references('id')->on('header_num_processos')->onDelete('cascade');               
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('type_headers');
    }
}
