<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::statement("
        INSERT INTO `direktorats` (`id_direktorat`, `nama_direktorat`, `created_at`, `updated_at`) VALUES
        ('D001', 'SEKRETARIAT (DUKMAN)', '2023-06-21 18:22:54.000', '2023-06-21 18:22:54.000'),
        ('D002', 'PERENCANAAN (P2KT)  (01, 02, 07, 09)', '2023-06-21 18:22:55.000', '2023-06-21 18:22:55.000'),
        ('D003', 'PEMBANGUNAN (03, 10)', '2023-06-21 18:22:57.000', '2023-06-21 18:22:57.000'),
        ('D004', 'PENATAAN DAN PESEBARAN (FP3KT) (04, 11)', '2023-06-21 18:22:58.000', '2023-06-21 18:22:58.000'),
        ('D005', 'PENGEMBANGAN SP DAN SKP (05, 12)', '2023-06-21 18:22:59.000', '2023-06-21 18:22:59.000'),
        ('D006', 'PENGEMBANGAN (PKT) (06, 13, 14)', '2023-06-21 18:23:00.000', '2023-06-21 18:23:00.000');
        
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('direktorats')->truncate();
    }
};
