<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat_Laporan extends Model
{
    use HasFactory;
    protected $grounded = [];
    protected $fillable = ['tanggal','id_riwayat_laporan'];
    
    public function rl_to_rls(){
        return $this->hasMany(Riwayat_Laporan_Satker::class);
    }
}
