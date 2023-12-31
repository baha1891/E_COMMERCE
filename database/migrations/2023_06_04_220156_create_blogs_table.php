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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('body');
            $table->string('main_img');
            $table->enum('status',['active','not_active']);
            $table->foreignId('admin_id')
            ->references('id')
            ->on('admins')
            ->onDelete('CASCADE');
            $table->foreignId('category_id')
            ->references('id')
            ->on('blog_categories')
            ->onDelete('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
