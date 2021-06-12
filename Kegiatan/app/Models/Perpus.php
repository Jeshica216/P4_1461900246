<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'rak_buku';

    protected $fillable = [
        'id',
        'id_buku',
        'id_jenis_buku',
    ];
}
