<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Beasiswa extends Model
{
    protected $fillable = [
        'nama', 'deskripsi', 'periode_mulai', 
        'periode_selesai', 'kuota', 'jenis', 
        'persyaratan', 'is_active'
    ];
    
    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
    
    public function scopeAktif($query)
    {
        return $query->where('is_active', true)
                   ->where('periode_selesai', '>=', now());
    }
}
