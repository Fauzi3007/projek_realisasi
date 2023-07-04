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
        Schema::create('detail__laporans', function (Blueprint $table) {
            $table->double('pagu',15,2)->nullable();
            $table->double('realisasi',15,2)->nullable();
            $table->string('direktorat_id_direktorat',5);
            $table->string('riwayat_laporan_satker_id_riwayat_laporan_satker',10);
            $table->timestamps();

            $table->primary(['direktorat_id_direktorat', 'riwayat_laporan_satker_id_riwayat_laporan_satker']);
            // $table->foreign('id_direktorat')->references('id_direktorat')->on('direktorats');            
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
        Schema::dropIfExists('detail__laporans');
    }
};
