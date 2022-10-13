<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Customer;
use App\Models\Category;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigInteger('id');
            // $table->foreign('category_id')->references('id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('CustomerName')->nullable();
            $table->string('name')->nullable();
            $table->bigInteger('category_id')->nullable()->default(12);
            $table->bigInteger('Quantity')->nullable();
            $table->bigInteger('unit')->nullable();
            $table->bigInteger('minussq')->nullable();
            $table->bigInteger('salestotalprice')->nullable();
            $table->bigInteger('salequantity')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('customers');
    }
};
