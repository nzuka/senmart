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
        Schema::create('suplier', function (Blueprint $table) {
            $table->bigIncrements('id_suplier'); 
            $table->string('nama', 100);
            $table->string('telp', 12);
            $table->tinytext('alamat');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suplier');
    }
};
