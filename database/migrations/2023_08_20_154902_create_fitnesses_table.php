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
        // Schema::create('fitnesses', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        // Create activity_tracking table
        Schema::create('activity_tracking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->integer('steps')->default(0);
            $table->float('distance')->default(0);
            $table->integer('calories')->default(0);
            $table->timestamps();
        });

        // Create workout_plans table
        Schema::create('workout_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });

        // Create workouts table
        Schema::create('workouts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('workout_plan_id')->constrained('workout_plans');
            $table->string('name');
            $table->text('instructions')->nullable();
            $table->timestamps();
        });

        // Create progress_tracking table
        Schema::create('progress_tracking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->integer('weight')->nullable();
            $table->float('body_fat')->nullable();
            $table->timestamps();
        });

        // Create health_goals table
        Schema::create('health_goals', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('goal');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('health_goals');
        Schema::dropIfExists('progress_tracking');
        Schema::dropIfExists('workouts');
        Schema::dropIfExists('workout_plans');
        Schema::dropIfExists('activity_tracking');
        Schema::dropIfExists('users');
    }
};
