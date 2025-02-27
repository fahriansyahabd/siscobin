<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EwsRanap extends Model
{
    use HasFactory;

    protected $table = 'ews_ranap'; // Nama tabel di database
    // protected $primarykey = 'id';

    // protected $fillable = [
    //     'kolom1',
    //     'kolom2',
    //     'kolom3', // Sesuaikan dengan kolom yang ada di tabel
    // ];
}
