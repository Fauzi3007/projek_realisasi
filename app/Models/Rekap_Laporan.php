<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekap_Laporan extends Model
{
    use HasFactory;
    protected $fillable = ['total_pagu','total_blokir','total_realisasi','total_persentase','riwayat_laporan_satker_id_riwayat_laporan_satker'];

    public function rkl_to_rls(){
        return $this->belongsTo(Riwayat_Laporan_Satker::class);
    }
}
