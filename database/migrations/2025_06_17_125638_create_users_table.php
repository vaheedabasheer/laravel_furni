<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
           $table->bigIncrements('rid'); // 👈 auto-incrementing primary key
             $table->string('name');
            $table->string('password',100);
            $table->string('email',100);
           
            $table->date('dob');
           $table->integer('phone',50);//data type of phone must be integer
           $table->string('type',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
