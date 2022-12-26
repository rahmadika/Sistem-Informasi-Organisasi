<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Anggota extends Model
{
    use HasFactory;

    protected $fillable = ['foto','name', 'tgl_lhr', 'address', 'ig'];

    public function acara(){
        return $this->hasOne(Acara::class, 'pj');
    }
    public function getTgllhrAttribute()
    {
        return Carbon::parse($this->attributes['tgl_lhr'])
        ->translatedFormat('d F Y');
    }

}
