<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'nilai', 'jurusan_id', 'foto'];

    public function jurusans()
    {
        return $this->belongsTo(Jurusan::class, 'jurusan_id');
    }

}
