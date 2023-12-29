<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;
    //nama databases
    protected $lable = 'products';
    //isi filed table products
    protected $fillable = [

        'name', 'slug', 'type', 'description', 'price', 'quantity'

    ];

    //untuk tidak memunculkan filed
    protected $hidden = [];

    //relasi ke table model ProductGallery
    public function galleries(){
        return $this->hasMany(ProductGallery::class,'products_id');
    }
}
