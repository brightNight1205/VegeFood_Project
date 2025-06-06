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
      Schema::create('product_details', function (Blueprint $table) {
    $table->id();
    $table->string('product_name');
    $table->decimal('discount', 8, 2);
    $table->decimal('cost', 10, 2);
    $table->foreignId('category_id')->constrained('categories')->onDelete('cascade');
    $table->boolean('available')->default(true);
    $table->string('image')->nullable();
    $table->timestamps();
});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_details');
    }
};
