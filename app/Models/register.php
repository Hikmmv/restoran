<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class register extends Model
{
    use HasFactory;
    protected $fillable = ['username', 'email' ,'password'];
    protected $table = 'register';
    protected $hidden = [
        'id',
        'created_at',
        'updated_at'
    ];
    public $timestamps = false;
    
}
