<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoryMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directory_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('directory_name');
            $table->string('directory_area');
            $table->string('directory_job');
            $table->string('directory_address');
            $table->string('directory_phone');
            $table->string('directory_phone_link');
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
        Schema::dropIfExists('directory_members');
    }
}
