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
            $table->string("title");
            $table->string("slug");
            $table->string("subtitle");
            $table->string("shor-dsc")->nullable();
            $table->string("long_dsc")->nullable();
            $table->integer("regular_price")->default(0);
            $table->integer("sale_price")->nullable();
            $table->integer("stock")->nullable();
            $table->integer("rating")->default(0);


            /**
             * relational schema
             */
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');

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
