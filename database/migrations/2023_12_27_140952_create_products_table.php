<?php

use App\Models\ProductCategory;
use App\Models\Seller;
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
            $table->longText('description')->nullable();
            $table->bigInteger('price');
            $table->string('image')->nullable();
            $table->foreignIdFor(ProductCategory::class, "category_id")->references("id")->on("product_categories")->onDelete("cascade");
            $table->foreignIdFor(Seller::class)->references("id")->on("sellers")->onDelete("cascade");
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
