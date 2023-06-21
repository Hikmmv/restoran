<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class table extends Model
{
    use HasFactory;
    protected $fillabel = ['your_name', 'your_email', 'your_phone', 'your_address'];
    protected $table = 'pembayaran';
    public $timestamps = false;
}
