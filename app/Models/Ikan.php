<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ikan extends Model
{
    use HasFactory;
    protected $table= 'ikan';
    protected $fillable = [
        'nama',
        'kelas',
        'ukuran',
        'harga',
        'input',
        'status',
        'ppath'
    ];
}
