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
            
            $table->string('role')->nullable()->default('user');
            $table->string('username')->nullable()->unique();
            $table->string('telephone')->nullable();
            $table->string('occupation')->nullable();
            $table->string('location')->default('Kampala (Central), Uganda')->nullable();
            $table->string('gender')->default('Unknown')->nullable();
            $table->string('profile_image')->default('profile.png')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('nationality')->default('Ugandan')->nullable(); 
            $table->string('status')->default('Active')->nullable();
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
