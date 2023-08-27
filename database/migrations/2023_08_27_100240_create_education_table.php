<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
public function up()
{
    Schema::create('education', function (Blueprint $table) {
        $table->bigIncrements('id'); // Ručno definisanje ID kolone
        $table->unsignedBigInteger('staff_id');
        $table->string('institution');
        $table->string('body');
        $table->string('title');
        $table->string('paper_name');
        $table->string('field');
        $table->string('issn')->nullable();
        $table->string('isbn')->nullable();
        $table->string('doi')->nullable();
        $table->string('country');
        $table->string('city');
        $table->date('date');
        $table->string('grade')->nullable();
        $table->integer('ects')->nullable();
        $table->boolean('review')->nullable();
        $table->boolean('publication')->nullable();
        $table->timestamps();
        $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('education');
    }
}
