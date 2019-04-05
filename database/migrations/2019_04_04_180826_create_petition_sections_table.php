<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetitionSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('petition_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('description')->nullable(); 
            $table->string('active')->nullable(); 
            $table->string('preliminar')->nullable(); 
            $table->string('do_cabimento')->nullable ();
            $table->string('da_sintese_fatica')->nullable();
            $table->string('do_direito')->nullable(); 
            $table->string('dos_pedidos')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('petition_sections');
    }
}
