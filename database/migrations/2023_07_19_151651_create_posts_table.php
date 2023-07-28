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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            /*
                0 => Normal,
                1 => Manset,
                2 => Sağ Manset
            */
            $table->smallInteger('location');
            $table->string('title');
            $table->string('short_title');
            $table->text('summary');
            $table->text('content');
            $table->string('image_url');
            $table->boolean('is_active');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
