<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respon extends Model
{
    protected $table = 'respon';
    protected $guarded;

    protected $casts = ['tanggal_pengaduan' => 'datetime'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class, 'id_pengaduan');
    }

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
}
