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
        DB::statement("INSERT INTO `satkers` (`id_satker`, `nama_satker`, `lokasi`, `created_at`, `updated_at`) VALUES
        ('S001', 'PROVINSI ACEH', 'aceh', '2023-07-19 00:05:47', '2023-07-19 00:05:47'),
        ('S002', 'PROVINSI SUMATERA UTARA', 'sumatera utara', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S003', 'PROVINSI SUMATERA BARAT', 'sumatera barat', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S004', 'PROVINSI RIAU', 'riau', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S005', 'PROVINSI JAMBI', 'jambi', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S006', 'PROVINSI SUMATERA SELATAN', 'sumatera selatan', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S007', 'PROVINSI BENGKULU', 'bengkulu', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S008', 'PROVINSI LAMPUNG', 'lampung', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S009', 'PROVINSI KEP. BANGKA BELITUNG', 'kep. bangka belitung', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S010', 'PROVINSI KEP. RIAU', 'kep. riau', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S011', 'PROVINSI DKI JAKARTA', 'dki jakarta', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S012', 'PROVINSI JAWA BARAT', 'jawa barat', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S013', 'PROVINSI JAWA TENGAH', 'jawa tengah', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S014', 'PROVINSI DI YOGYAKARTA', 'di yogyakarta', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S015', 'PROVINSI JAWA TIMUR', 'jawa timur', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S016', 'PROVINSI BANTEN', 'banten', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S017', 'PROVINSI BALI', 'bali', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S018', 'PROVINSI NUSA TENGGARA BARAT', 'nusa tenggara barat', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S019', 'PROVINSI NUSA TENGGARA TIMUR', 'nusa tenggara timur', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S020', 'PROVINSI KALIMANTAN BARAT', 'kalimantan barat', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S021', 'PROVINSI KALIMANTAN TENGAH', 'kalimantan tengah', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S022', 'PROVINSI KALIMANTAN SELATAN', 'kalimantan selatan', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S023', 'PROVINSI KALIMANTAN TIMUR', 'kalimantan timur', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S024', 'PROVINSI KALIMANTAN UTARA', 'kalimantan utara', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S025', 'PROVINSI SULAWESI UTARA', 'sulawesi utara', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S026', 'PROVINSI SULAWESI TENGAH', 'sulawesi tengah', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S027', 'PROVINSI SULAWESI SELATAN', 'sulawesi selatan', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S028', 'PROVINSI SULAWESI TENGGARA', 'sulawesi tenggara', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S029', 'PROVINSI GORONTALO', 'gorontalo', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S030', 'PROVINSI SULAWESI BARAT', 'sulawesi barat', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S031', 'PROVINSI MALUKU', 'maluku', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S032', 'PROVINSI MALUKU UTARA', 'maluku utara', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S033', 'PROVINSI PAPUA BARAT', 'papua barat', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S034', 'PROVINSI PAPUA TENGAH', 'papua tengah', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S035', 'PROVINSI PAPUA PEGUNUNGAN', 'papua pegunungan', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S036', 'PROVINSI PAPUA SELATAN', 'papua selatan', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S037', 'PROVINSI PAPUA BARAT DAYA', 'papua barat daya', '2023-07-18 01:28:37', '2023-07-18 01:28:37'),
        ('S038', 'PROVINSI PAPUA.', 'papua.', '2023-07-20 19:41:15', '2023-07-20 19:41:15')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('satkers')->truncate();

    }
};
