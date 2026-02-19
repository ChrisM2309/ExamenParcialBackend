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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('title')->after('id');
            $table->string('description')->after('title');
            $table->string('isbn')->after('description');
            $table->integer('total_copies')->after('isbn'); 
            $table->integer('available_copies')->after('total_copies');
            $table->boolean('status')->after('available_copies');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
