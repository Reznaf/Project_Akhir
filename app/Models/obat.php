<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Obat extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_table',
        'nama',
        'kuantitas',
    ];

    public $timestamps = true; // Enable timestamps
}
