<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product2 extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table = 'user';
    protected $primaryKey = 'id';
    protected $fillable = ['produk', 'harga', 'jumlah'];
}
