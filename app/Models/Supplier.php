<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;
    protected $connection = 'mysql1';
    protected $table = 'table_supplier';
    protected $primaryKey = 's_no';
    protected $fillable = ['name', 'kota'];
}
