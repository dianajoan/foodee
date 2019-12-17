<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->nullable()->default('subscriber');
            $table->string('profile_image')->nullable();
            $table->string('gender')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('telephone')->nullable();
            $table->string('nationality')->nullable()->default('Ugandan');
            $table->string('occupation')->nullable();
            $table->string('place_of_work')->nullable();
            $table->string('work_address')->nullable();
            $table->string('home_address')->nullable();
            $table->string('email_notifications')->nullable();
            $table->text('bio')->nullable();
            $table->string('status')->nullable()->default('pending');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
