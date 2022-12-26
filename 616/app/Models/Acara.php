<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Carbon;

class Acara extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'date', 'place','pj'];

    public function transaction(){
        return $this->hasMany(Transaction::class,'nk');
    }

    public function anggota(){
        return $this->belongsTo(Anggota::class, 'pj','id');
    }
    public function getDateAttribute()
    {
        return Carbon::parse($this->attributes['date'])
        ->translatedFormat('d F Y');
    }
}