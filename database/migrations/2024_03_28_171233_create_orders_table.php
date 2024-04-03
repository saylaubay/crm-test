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
        Schema::create('order', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->bigInteger('deliveryman_id')->unsigned();
            $table->foreign('deliveryman_id')->references('id')->on('users');
            $table->bigInteger('supervisor_id')->unsigned();
            $table->foreign('supervisor_id')->references('id')->on('users');
            $table->unsignedBigInteger('price');
            $table->string('address');
            $table->enum('delivered', ['YES','NO'])->default('NO');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order');
    }
};
