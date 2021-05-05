<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// DIHIDUPKAN UNTUK SOFT DELETE
// use Illuminate\Database\Eloquent\SoftDeletes;

class Mahasiswa extends Model
{
    use HasFactory;
    // BUAT SOFT DELETE
    // use SoftDeletes;
    protected $fillable = [
        'nim','nama','email','jurusan'
    ];   
    public $timestamps = false;
}