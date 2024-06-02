<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * obat warchar 50
     * kuantitas unsigned integer default 0
     * 
     */
    public function up(): void
    {
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 50);
            $table->unsignedInteger('kuantitas')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('obat');
    }
};
