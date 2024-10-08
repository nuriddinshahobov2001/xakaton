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
        Schema::create('application_models', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->default(null); // Full Name
            $table->date('date')->nullable()->default(null); // Date of Birth
            $table->string('region')->nullable()->default(null); // Region
            $table->string('city')->nullable()->default(null); // City/Town
            $table->string('status')->nullable()->default(null); // Marital Status
            $table->integer('school')->nullable()->default(null); // Primary Education (Number of Grades Completed)
            $table->string('incomplete_reason')->nullable()->default(null); // Reason for incomplete education
            $table->text('special_education')->nullable()->default(null); // Explanation for incomplete education
            $table->integer('education')->nullable()->default(null); // Higher Education (Number of courses completed)
            $table->string('reason_no_university')->nullable()->default(null); // Reason for not completing university
            $table->text('university')->nullable()->default(null); // Explanation for not completing university
            $table->string('climate_impact')->nullable()->default(null); // Climate change impact assessment
            $table->json('improvement_measures')->nullable(); // Measures to improve the situation (multiple select options)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('application_models');
    }
};
