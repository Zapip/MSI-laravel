<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;
    protected $connection = 'mysql1';
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['produk', 'harga', 'jumlah'];

}
