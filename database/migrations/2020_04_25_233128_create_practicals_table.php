<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practicals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('practical_name');
            $table->dateTime('due_date');
            $table->integer('total')->nullable();
            $table->string('practical_filename');
            $table->string('solution_filename')->nullable(); //Because the solution is only uploaded when we edit the practical we have to make this optional         
            $table->unsignedBigInteger('module_id')->nullable();
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practicals');
    }
}
