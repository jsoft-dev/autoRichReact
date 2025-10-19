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
        if(Schema::hasTable('jobs')) {
            return;
        }

        Schema::create('jobs', function (Blueprint $table) {
            $table->uuid();
            $table->timestamp('from');
            $table->timestamp('to');
            $table->foreignId('status',)->constrained('job_statuses');
            $table->foreignId('booking_type')->constrained('booking_types');
            $table->foreignId('type')->constrained('job_types');
            $table->foreignId('customer')->constrained('customers');
            $table->foreignId('vehicle')->constrained('vehicles');
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
