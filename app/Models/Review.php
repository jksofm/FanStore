<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $primarykey = 'id';
    protected $table = 'comment';
    public $timestamps = false;

    protected $fillable = [
        'productID',
        'nameuser',
        'reviewContent',
        'rating',
       
    ];
}
