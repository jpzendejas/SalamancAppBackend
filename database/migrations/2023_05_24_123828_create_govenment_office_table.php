<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovenmentOfficeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('govenment_office', function (Blueprint $table) {
            $table->increments('id');
            $table->string('government_office_name');
            $table->string('government_office_address');
            $table->string('government_office_phone');
            $table->string('govenment_office_email');
            $table->double('latitude');
            $table->double('longitude');
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
        Schema::dropIfExists('govenment_office');
    }
}
