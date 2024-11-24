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
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("user_id")->references('id')->on('users')->onDelete('cascade');
            $table->string("product_title");
            $table->integer("quantity")->default(1);
            $table->decimal("price",9,2)->default(0.00);
            $table->decimal("total")->default(0.00);
            $table->string("status")->default("pending");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commandes');
    }
};
