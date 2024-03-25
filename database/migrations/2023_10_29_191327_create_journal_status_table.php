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
        Schema::create('journal_status', function (Blueprint $table) {
            $table->id();
            $table->string('journal_id')->nullable();
            $table->string('author_id')->nullable();
            $table->string('reviewer_id')->nullable();
            $table->string('Pending')->nullable();
            $table->string('review')->nullable();
            $table->string('rejected')->nullable();
            $table->string('accepted')->nullable();
            $table->string('Published')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_status');
    }
};
