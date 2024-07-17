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
        Schema::create('helper_settings', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->text('title');
            $table->longText('description');
            $table->string('sort')->unique()->nullable();
            $table->tinyInteger('disabled')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('helper_settings');
    }
};
