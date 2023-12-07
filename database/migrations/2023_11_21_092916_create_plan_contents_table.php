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
        Schema::create('plan_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('plan_type_id');
            $table->string('start')->nullable();
            $table->string('price');
            $table->string('time');
            $table->string('tax');
            $table->string('button');
            $table->string('apply');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plan_contents');
    }
};
