<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('excerpt')->nullable();
            $table->longText('content');
            $table->string('author');
            $table->string('category')->nullable();
            $table->string('image_url')->nullable();
            $table->string('source_url');
            $table->date('published_at');
            $table->timestamps();
        });
    }
    public function down(): void {
        Schema::dropIfExists('articles');
    }
};
