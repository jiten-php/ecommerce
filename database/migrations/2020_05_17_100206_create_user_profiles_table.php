<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_profiles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('user_name');
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender',['male','female'])->default('male');
            $table->bigInteger('phone');
            $table->integer('zip_code');
            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('city_id');
            $table->string('image')->nullable();
            $table->text('profile_description')->nullable();
            $table->text('address')->nullable();
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
        Schema::dropIfExists('user_profiles');
    }
}
