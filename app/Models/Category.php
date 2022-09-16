<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $primarykey = 'id';
    protected $table = 'category';
    public $timestamps = false;

    protected $fillable = [
        'name',
        'photo'
    ];
}
