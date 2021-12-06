<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Remember extends Model
{
    protected $fillable = [
        'idPost', 'idUser'
    ];
}