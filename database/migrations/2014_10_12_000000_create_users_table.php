<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('full_name');
            $table->string('email')->unique();
            $table->string('ph_no')->nullable();
            $table->string('photo')->nullable();
            $table->string('address')->nullable();
            $table->string('password');
            $table->string('linkedin')->nullable();
            $table->string('facabook')->nullable();
            $table->string('github')->nullable();
            $table->longText('bio')->nullable();
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
};
