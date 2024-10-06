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
        Schema::create('app_models', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default(null);
            $table->string('date')->nullable()->default(null);
            $table->string('region')->nullable()->default(null);
            $table->string('city')->nullable()->default(null);
            $table->string('status')->nullable()->default(null);
            $table->string('education')->nullable()->default(null);
            $table->string('parents')->nullable()->default(null);
            $table->string('special_education')->nullable()->default(null);
            $table->string('university')->nullable()->default(null);
            $table->string('reason')->nullable()->default(null);
            $table->string('profession')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('app_models');
    }
};
