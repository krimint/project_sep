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
        Schema::create('obat', function (Blueprint $table) {
            $table->id();
            $table->integer('id_jenis')->constrained('jenis')->onDelete('cascade');
            $table->integer('id_supplier')->constrained('supplier')->onDelete('cascade');
            $table->string('nama_obat',100)->unique();
            $table->integer('stock');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->boolean('status');
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
        Schema::dropIfExists('obat');
    }
};
