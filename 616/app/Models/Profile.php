<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'avatar',
        'tmpt_lhr',
        'tgl_lhr',
        'address',
        'instagram',
        'whatsapp',
    ];
}
