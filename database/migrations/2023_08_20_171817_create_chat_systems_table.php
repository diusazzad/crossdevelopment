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
        // Schema::create('chat_systems', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        // Create chats table
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        // Create messages table
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('chat_id')->constrained('chats');
            $table->foreignId('user_id')->constrained('users');
            $table->text('content');
            $table->timestamps();
        });

        // Create group_chats table
        Schema::create('group_chats', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        // Create group_chat_members table
        Schema::create('group_chat_members', function (Blueprint $table) {
            $table->id();
            $table->foreignId('group_chat_id')->constrained('group_chats');
            $table->foreignId('user_id')->constrained('users');
            $table->timestamps();
        });

        // Create multimedia table (for photos, videos, etc.)
        Schema::create('multimedia', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('type'); // photo, video, etc.
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('multimedia');
        Schema::dropIfExists('group_chat_members');
        Schema::dropIfExists('group_chats');
        Schema::dropIfExists('messages');
        Schema::dropIfExists('chats');
        Schema::dropIfExists('users');
    }
};
