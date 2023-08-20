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
        // Schema::create('prayer_trackings', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        // Create locations table (for storing user locations)
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('latitude');
            $table->string('longitude');
            $table->timestamps();
        });

        // Create prayers table (for tracking daily prayers)
        Schema::create('prayers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->timestamp('prayer_time');
            $table->timestamps();
        });

        // Create qibla_directions table (for storing qibla directions)
        Schema::create('qibla_directions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->decimal('qibla_angle', 10, 2);
            $table->timestamps();
        });

        // Create spiritual_reminders table (for storing reminders and content)
        Schema::create('spiritual_reminders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->text('content');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('spiritual_reminders');
        Schema::dropIfExists('qibla_directions');
        Schema::dropIfExists('prayers');
        Schema::dropIfExists('locations');
        Schema::dropIfExists('users');
    }

};
