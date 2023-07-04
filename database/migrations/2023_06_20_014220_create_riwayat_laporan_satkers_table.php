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
        Schema::create('riwayat__laporan__satkers', function (Blueprint $table) {
            $table->string('id_riwayat_laporan_satker',10)->primary();
            $table->string('satker_id_satker',5);
            $table->string('riwayat_laporan_id_riwayat_laporan',10);
            $table->timestamps();

            // $table->foreign('id_satker')->references('id_satker')->on('satkers');            
            // $table->foreign('id_riwayat_laporan')->references('id_riwayat_laporan')->on('riwayat_laporan');            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('riwayat__laporan__satkers');
    }
};
