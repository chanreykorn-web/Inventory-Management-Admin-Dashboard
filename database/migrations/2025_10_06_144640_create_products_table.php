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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('category')->nullable();
            $table->integer('subcategory')->nullable();
            $table->integer('brand')->nullable();
            $table->integer('unit')->nullable();
            $table->integer('unit_type')->nullable();
            $table->integer('sku')->nullable();
            $table->integer('mini_qty')->nullable();
            $table->integer('qty')->nullable();
            $table->decimal('tax', 8, 2)->nullable();
            $table->integer('discount_type')->nullable();
            $table->decimal('price', 8, 2);
            $table->decimal('cost', 8, 2);
            $table->text('details')->nullable();
            $table->string('image')->nullable();
            $table->string('barcode')->nullable();
            $table->string('barcode_type')->nullable();
            $table->string('status')->default('active');
            $table->integer('stock');
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
