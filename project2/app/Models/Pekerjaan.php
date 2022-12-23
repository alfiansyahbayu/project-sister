<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $fillable = [
        'nama', 'Pria', 'Wanita', 'periode'
    ];
}
