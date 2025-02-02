<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donasi extends Model
{
    use HasFactory;

    protected $table = 'donations';
    protected $primaryKey = "id";
    protected $fillable = [
        'id', 'image', 'name', 'detail'
    ];
}
