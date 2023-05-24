<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGovernmentMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('government_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('member_name');
            $table->string('member_job');
            $table->string('member_address');
            $table->string('member_phone');
            $table->string('member_mail');
            $table->string('member_image');
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
        Schema::dropIfExists('government_members');
    }
}
