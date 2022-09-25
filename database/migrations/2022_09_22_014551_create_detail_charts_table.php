<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_charts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('idproduct')->nullable();
            $table->string('name');
            $table->string('qty');
            $table->string('price');
            $table->string('notelepon');
            $table->string('email');
            $table->string('alamatpesanan');
            $table->string('transfer');
            $table->string('jasapengiriman');
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
        Schema::dropIfExists('detail_charts');
    }
};
