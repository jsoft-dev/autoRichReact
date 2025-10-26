<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if(Schema::hasTable('workshop_jobs')) {
            return;
        }

        Schema::create('workshop_jobs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->timestamp('from');
            $table->timestamp('to');
            $table->foreignUuid('status',)->constrained('job_statuses');
            $table->foreignUuid('booking_type')->constrained('booking_types');
            $table->foreignUuid('type')->constrained('job_types');
            $table->foreignUuid('customer')->constrained('customers');
            $table->foreignUuid('vehicle')->constrained('vehicles');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
