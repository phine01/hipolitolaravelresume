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
        Schema::create('personal', function (Blueprint $table) {
            $table->id();
            $table->string('birthDate');
            $table->string('birthPlace');
            $table->integer('age');
            $table->string('gender');
            $table->string('nationality');
            $table->string('civilStatus');
            $table->string('height');
            $table->string('weight');
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
