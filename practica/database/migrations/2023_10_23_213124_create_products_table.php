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
            $table->string('code')->unique();
            $table->unsignedBigInteger('categorie_id');
            $table->unsignedBigInteger('brand_id');
            $table->string('description');
            $table->enum('unit_measurement',['unit','other']);
            $table->tinyInteger('available');
            $table->decimal('percentage_vat',$precision=4,$scale=2);
            $table->decimal('unit_price',$precision=20,$scale=2);
            $table->unsignedSmallInteger('stock');
            $table->timestamps();
            $table->foreign('categorie_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('manufacturer_brands');
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
