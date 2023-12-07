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
        Schema::create('main_contacts', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('email');
            $table->bigInteger('number');
            $table->longtext('message');
            $table->string('service');
            $table->longText('note')->nullable();
            $table->string('status')->default('unRead');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_contacts');
    }
};
