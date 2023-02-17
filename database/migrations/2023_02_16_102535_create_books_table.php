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
            $table->foreignId('category_id')
            ->constrained('category')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('author');
            $table->string('name');
            $table->integer('rating');
            $table->string('cover');
            $table->string('url');
            $table->boolean('visible')->default(false);
            $table->text('description')->default("This book has no description");
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
