<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table ='products';

    protected $fillable=[
        'title',
        'color',
        'category',
        'capa',
        'size',
        'particulars',
        'brand',
        'description',
        'qtd',
        'amount',
        'status'
    ];

    public function images(){
        return $this->hasMany(Image::class);
    }
}
