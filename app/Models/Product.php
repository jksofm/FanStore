<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $primarykey = 'id';
    
    protected $table = 'product';

    public $timestamps = false;

    protected $fillable = [
        'name', 
        'price',
        'quantity',
        'status',
        'created',
        'description'
    ];
}
