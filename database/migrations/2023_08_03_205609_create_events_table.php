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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->integer('participants');
            $table->string('eventName');
            $table->string('eventDetail');
            $table->string('eventPoster');
            $table->string('eventHeader');
            $table->string('eventStart');
            $table->string('eventEnd');
            $table->integer('budget')->default(0);
            $table->integer('staffs')->default(0);
            $table->string('location');
            $table->string('account_number')->nullable;

            $table->foreignIdFor(\App\Models\Account::class);

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
