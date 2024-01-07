<?php

use App\Models\Location;
use App\Models\OrderStatus;
use App\Models\Seller;
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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->references("id")->on("users")->onDelete("cascade");
            $table->bigInteger('total_price');
            $table->date('order_date');
            $table->foreignIdFor(Seller::class)->references("id")->on("sellers")->onDelete("cascade");
            $table->foreignIdFor(OrderStatus::class)->references("id")->on("order_statuses")->onDelete("cascade");
            $table->foreignIdFor(Location::class)->references("id")->on("locations")->onDelete("cascade");
            $table->string('location_detail')->nullable();
            $table->longText('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
