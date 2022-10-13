<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\category;
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('category_id')->nullable()->default(12);
            $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->bigInteger('Quantity')->nullable();
            $table->bigInteger('unit')->nullable();
            $table->bigInteger('minussq')->nullable();
            $table->string('CustomerName')->nullable();
            $table->bigInteger('salestotalprice')->nullable();
            $table->bigInteger('salequantity')->nullable();
            $table->enum('status', ['1', '0'])->nullable()->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
};
