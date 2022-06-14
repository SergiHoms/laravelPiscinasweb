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
        Schema::create('table_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('cliente_id');
            $table->string('producto_id');
            $table->integer('cantidad');
            $table->decimal('precio');     
            $table->decimal('iva');
            $table->decimal('total');
            $table->boolean('visible');
            $table->boolean('active');
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
        Schema::dropIfExists('table_ventas');
    }
};
