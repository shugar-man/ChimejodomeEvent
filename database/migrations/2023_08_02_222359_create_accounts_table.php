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
        Schema::create('accounts', function (Blueprint $table) {
            $table->id();
            $table->integer('role')->default(0);
            $table->string('username');
            $table->string('name');
            $table->string('password');
            $table->string('Profile_pic')->nullable;
            $table->string('faculty')->nullable;
            $table->integer('year')->nullable;
            $table->string('facebook')->nullable;
            $table->string('line')->nullable;
            $table->string('instagram')->nullable;
            $table->string('email')->unique();
            $table->integer('Tel')->nullable;
            

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
