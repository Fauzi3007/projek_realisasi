<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Satker extends Model
{
    use HasFactory;
    protected $grounded = [];
    protected $fillable = ['id_satker','nama_satker','lokasi'];
    
    public function satker_to_rls(){
        return $this->hasMany(Riwayat_Laporan_Satker::class);
    }

   
}
