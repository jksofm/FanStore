<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImagesGallery extends Model
{

    protected $primarykey = 'id';
    protected $table = 'images_gallery';
    public $timestamps = false;

    protected $fillable = [
        'image',
        'productID',
    ];
}
