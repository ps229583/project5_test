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
        Schema::create('oefeningen', function (Blueprint $table) {

            $table->tinyInteger('id')->autoIncrement();
            $table->string('naam', 50)->nullable(false);
            $table->string('beschrijving', 80)->nullable(false);
            $table->string('vertaling', 80)->nullable(false);
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
