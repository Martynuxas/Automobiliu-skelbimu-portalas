<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Remember extends Model
{
    protected $fillable = [
        'idPost', 'idUser'
    ];
}
