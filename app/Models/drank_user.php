<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class drank_user extends Model
{
    protected $table = 'drank_user';
    use HasFactory;
    protected $fillable = [
        'amount'
    ];
}
