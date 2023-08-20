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
        // Schema::create('todo_lists', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        // Create tasks table (for storing tasks)
        Schema::create('todo_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('title');
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });

        // Create subtasks table (for storing sub-tasks)
        Schema::create('subtasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('task_id')->constrained('tasks');
            $table->string('title');
            $table->boolean('completed')->default(false);
            $table->timestamps();
        });

        // Create categories table (for categorizing tasks)
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('name');
            $table->timestamps();
        });

        // Create task_category table (for mapping tasks to categories)
        Schema::create('task_category', function (Blueprint $table) {
            $table->foreignId('task_id')->constrained('tasks');
            $table->foreignId('category_id')->constrained('categories');
            $table->primary(['task_id', 'category_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('task_category');
        Schema::dropIfExists('categories');
        Schema::dropIfExists('subtasks');
        Schema::dropIfExists('tasks');
        Schema::dropIfExists('users');
    }
};
