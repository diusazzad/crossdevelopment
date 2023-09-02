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
        // Schema::create('tasks', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
// Create to_do_lists table
        // Schema::create('to_do_lists', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained();
        //     $table->string('title');
        //     $table->timestamps();
        // });

        // // Create tasks table
        // Schema::create('tasks', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('to_do_list_id')->constrained('to_do_lists');
        //     $table->string('name');
        //     $table->text('description')->nullable();
        //     $table->boolean('completed')->default(false);
        //     $table->integer('priority')->default(0);
        //     $table->date('due_date')->nullable();
        //     $table->timestamps();
        // });

        // // Create reminders table
        // Schema::create('reminders', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('task_id')->constrained('tasks');
        //     $table->dateTime('reminder_date_time');
        //     $table->timestamps();
        // });

        // // Create notifications table
        // Schema::create('task_notifications', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained();
        //     $table->string('message');
        //     $table->boolean('read')->default(false);
        //     $table->timestamps();
        // });
    }

    public function down()
    {
        Schema::dropIfExists('notifications');
        Schema::dropIfExists('reminders');
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('to_do_lists');
        Schema::dropIfExists('users');
    }
};
