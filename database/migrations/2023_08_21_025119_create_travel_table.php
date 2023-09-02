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
        // Schema::create('travel', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        // Create trips table (for storing trip information)
        // Schema::create('trips', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained('users');
        //     $table->string('title');
        //     $table->dateTime('start_date');
        //     $table->dateTime('end_date');
        //     $table->timestamps();
        // });

        // // Create destinations table (for storing destination information)
        // Schema::create('destinations', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('name');
        //     $table->text('description')->nullable();
        //     $table->timestamps();
        // });

        // // Create trip_destination table (for mapping trips to destinations)
        // Schema::create('trip_destination', function (Blueprint $table) {
        //     $table->foreignId('trip_id')->constrained('trips');
        //     $table->foreignId('destination_id')->constrained('destinations');
        //     $table->primary(['trip_id', 'destination_id']);
        // });

        // // Create travel_checklists table (for storing travel essentials checklist)
        // Schema::create('travel_checklists', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained('users');
        //     $table->string('item');
        //     $table->boolean('completed')->default(false);
        //     $table->timestamps();
        // });

        // // Create expenses table (for tracking expenses)
        // Schema::create('expenses', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('trip_id')->constrained('trips');
        //     $table->string('description');
        //     $table->decimal('amount', 10, 2);
        //     $table->timestamps();
        // });
    }

    public function down()
    {
        Schema::dropIfExists('expenses');
        Schema::dropIfExists('travel_checklists');
        Schema::dropIfExists('trip_destination');
        Schema::dropIfExists('destinations');
        Schema::dropIfExists('trips');
        Schema::dropIfExists('users');
    }
};
