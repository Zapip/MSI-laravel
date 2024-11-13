<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chatbot extends Model
{
    use HasFactory;
    protected $connection = 'mysql';

    protected $table = 'chatbot';
    protected $primaryKey = 'id';
    protected $fillable = ['queries', 'replies'];
}
