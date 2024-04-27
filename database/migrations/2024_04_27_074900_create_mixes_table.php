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
        Schema::create('mixes', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('Producto')->unsigned();
            $table->string('Descrip');
            $table->float('Cantidad');
            $table->float('Peso');

            $table->foreign('Producto')->references('id')->on('productos')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mixes');
    }
};
