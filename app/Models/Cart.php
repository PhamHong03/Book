<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = [
        'customer_id',
        'product_id',
        'qty',
        'price',
        'status'
                
    ];

    public function product()  {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
    // public function status() {
    //     return $this->hasMany(Status::class,'id', 'ma', 'name');
    // }
    public function user() {
        return $this->hasOne(User::class, 'id');
    }
}
