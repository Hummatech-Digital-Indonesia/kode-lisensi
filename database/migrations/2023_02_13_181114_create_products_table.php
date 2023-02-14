<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignId('category_id')->constrained()->cascadeOnUpdate()->restrictOnDelete();
            $table->enum('status', ['available', 'preorder']);
            $table->enum('type', ['serial', 'credential']);
            $table->string('name');
            $table->text('photo')->nullable();
            $table->integer('price');
            $table->integer('discount')->default(0);
            $table->integer('reseller_discount');
            $table->text('description');
            $table->text('attachment_file');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
