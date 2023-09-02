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
        // Schema::create('social_media', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        // Create posts table
        // Schema::create('posts', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained();
        //     $table->text('content');
        //     $table->timestamps();
        // });

        // // Create likes table
        // Schema::create('likes', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained();
        //     $table->foreignId('post_id')->constrained();
        //     $table->timestamps();
        // });

        // // Create comments table
        // Schema::create('comments', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained();
        //     $table->foreignId('post_id')->constrained();
        //     $table->text('content');
        //     $table->timestamps();
        // });

        // // Create friend_connections table
        // Schema::create('friend_connections', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained();
        //     $table->foreignId('friend_id')->constrained('users');
        //     $table->timestamps();
        // });

        // // Create friend_requests table
        // Schema::create('friend_requests', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained();
        //     $table->foreignId('requester_id')->constrained('users');
        //     $table->timestamps();
        // });

        // // Create notifications table
        // Schema::create('notifications', function (Blueprint $table) {
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
        Schema::dropIfExists('friend_requests');
        Schema::dropIfExists('friend_connections');
        Schema::dropIfExists('comments');
        Schema::dropIfExists('likes');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('users');
    }
};
