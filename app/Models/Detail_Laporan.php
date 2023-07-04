<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Laporan extends Model
{
    use HasFactory;

    protected $primaryKey = null;
    public $incrementing = false;

    protected $fillable = ['pagu','realisasi','direktorat_id_direktorat','riwayat_laporan_satker_id_riwayat_laporan_satker'];
    
    public function direktorat(){
        return $this->belongsTo(Direktorat::class, 'direktorat_id_direktorat', 'id_direktorat');
    }

    public function dl_to_rls(){
        return $this->belongsTo(Riwayat_Laporan_Satker::class, 'riwayat_laporan_satker_id_riwayat_laporan_satker', 'id_riwayat_laporan_satker');
    }
}
