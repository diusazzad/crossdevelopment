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
        // Schema::create('notes', function (Blueprint $table) {
        //     $table->id();
        //     $table->timestamps();
        // });
        // Create payments table (for storing payment history)
        // Create notes table (for storing notes)
        // Schema::create('notes', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('user_id')->constrained('users');
        //     $table->string('title');
        //     $table->text('content');
        //     $table->boolean('is_private')->default(false);
        //     $table->timestamps();
        // });

        // // Create note_attachments table (for attaching images/files to notes)
        // Schema::create('note_attachments', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('note_id')->constrained('notes');
        //     $table->string('filename');
        //     $table->timestamps();
        // });
    }

    public function down()
    {
        Schema::dropIfExists('note_attachments');
        Schema::dropIfExists('notes');
        Schema::dropIfExists('users');
    }
};
