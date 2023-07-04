<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_Laporan_Satker extends Model
{
    use HasFactory;
    protected $grounded = [];
    protected $fillable = ['id_riwayat_laporan_satker','satker_id_satker','riwayat_laporan_id_riwayat_laporan'];
    
    public function rls_to_rkl(){
        return $this->hasOne(Rekap_Laporan::class);
    }

    public function rls_to_satker(){
        
        return $this->belongsTo(Satker::class,'satker_id_satker','id_satker');
        
    }

    public function rls_to_rl(){
        
        return $this->belongsTo(Riwayat_Laporan::class,'riwayat_laporan_id_riwayat_laporan','id_riwayat_laporan');
        
    }
}
