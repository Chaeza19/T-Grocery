<?php

use App\Models\Product;
use App\Models\User;
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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->references("id")->on("users")->onDelete("cascade");
            $table->foreignIdFor(Product::class)->references("id")->on("products")->onDelete("cascade");
            $table->integer('amount')->unsigned();
            // $table->bigInteger('total');
            $table->longText('description')->nullable();
            $table->boolean('isCheckout')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
