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
        Schema::create('rekap__laporans', function (Blueprint $table) {
            $table->string('riwayat_laporan_satker_id_riwayat_laporan_satker',10)->primary();
            $table->double('total_pagu',15,2)->nullable();
            $table->double('total_realisasi',15,2)->nullable();
            $table->double('total_blokir',15,2)->nullable();
            $table->float('total_persentase',5,2);
            $table->timestamps();

            // $table->foreign('id_riwayat_laporan_satker')->references('id_riwayat_laporan_satker')->on('riwayat_laporan_satkers');            

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rekap__laporans');
    }
};
