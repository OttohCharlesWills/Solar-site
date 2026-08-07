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
        Schema::create('projects', function (Blueprint $table) {

            $table->id();

            $table->string('business_name')->nullable();

            $table->string('client_name');

            $table->string('phone')->nullable();

            $table->string('email')->nullable();

            $table->string('location');

            $table->string('service_type');

            $table->longText('description')->nullable();

            $table->enum('progress',[
                'Pending',
                'Planning',
                'Installation',
                'Testing',
                'Completed',
                'Maintenance'
            ])->default('Pending');

            $table->enum('status',[
                'Active',
                'Completed',
                'On Hold',
                'Cancelled'
            ])->default('Active');

            $table->date('start_date');

            $table->date('completion_date')->nullable();

            $table->decimal('amount',12,2)->nullable();

            $table->string('assigned_to')->nullable();

            $table->foreignId('created_by')
                ->constrained('users')
                ->cascadeOnDelete();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
