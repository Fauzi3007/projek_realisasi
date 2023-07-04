<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direktorat extends Model
{
    use HasFactory;
    protected $grounded = [];
    protected $fillable = ['id_direktorat','nama_direktorat'];
    
    public function detail(){
        return $this->hasMany(Detail_Laporan::class);
    }
}
