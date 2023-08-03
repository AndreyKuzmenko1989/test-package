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
        Schema::create('user_pre_cached_data', function (Blueprint $table) {
            $table->id();
            $table->string('label')->unique();
            $table->integer('success_withdraws_count')->default(0);
            $table->unsignedFloat('success_withdraws_amount')->default(0);
            $table->integer('withdraws_count')->default(0);
            $table->dateTime('last_data_update')->nullable();
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
        Schema::dropIfExists('user_pre_cached_data');
    }
};
