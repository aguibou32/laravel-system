<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('name');
            $table->string('surname');
            $table->string('gender');
            $table->date('date_of_birth');
            $table->string('phone_number');
            $table->string('email_address');
            $table->string('name_on_certificate');
            $table->string('id_or_passport_number');
            $table->string('institution_name');
            $table->year('year_of_study');
            $table->string('highest_educational_qualification_name')->default("test");            
            $table->string('certificate')->default("certificate");
            $table->string('id_or_passport_document')->default("identification");
            $table->string('declaration')->default("aknowledge");
            $table->string('application_status')->default("pending");
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
        Schema::dropIfExists('applications');
    }
}
