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


        Schema::create('staff_bio', function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->contrained("users")->onUpdate('cascade')->onDelete('cascade');
            $table->string("othernames");
            $table->string("phone");
            $table->string("address");
            $table->string("maritalstatus");
            $table->string("nationality");
            $table->string("dob");
            $table->string("pob");
            $table->string("dept");
            $table->string("phone");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff_bio');
    }
};
