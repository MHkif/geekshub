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
            ->constrained('categories')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->string('author');
            $table->string('title');
            $table->float('rating')->default(0.0);
            $table->string('cover')->nullable();
            $table->string('url');
            $table->boolean('archived')->default(false);
            $table->mediumText('description')->default("This book has no description");
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
