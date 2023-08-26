<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStaffAcademicInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffacademicinfo', function (Blueprint $table) {
            $table->increments('id'); // Koristite increments umjesto id
            $table->unsignedBigInteger('staff_id');
            $table->foreign('staff_id')->references('id')->on('staff');
            $table->timestamps();
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('last_updated_by');
            $table->string('institucija');
            $table->string('tjelo');
            $table->string('zvanje');
            $table->string('naziv_rada');
            $table->string('oblast');
            $table->string('issn')->nullable();
            $table->string('isbn')->nullable();
            $table->string('doi')->nullable();
            $table->string('država');
            $table->string('mjesto');
            $table->date('datum');
            $table->integer('ocjena')->nullable();
            $table->integer('ects')->nullable();
            $table->boolean('recenzija')->nullable();
            $table->string('publikacija');
        });
    }
    
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_academic_info');
    }
}
