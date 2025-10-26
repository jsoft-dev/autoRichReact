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
        if (Schema::hasTable('employee_job')) {
            return;
        }
        Schema::create('employee_job', function (Blueprint $table) {
            $table->uuid('id');
            $table->foreignUuid('id')->constrained('employees');
            $table->foreignUuid('wid')->constrained('workshop_jobs');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_job');
    }
};
