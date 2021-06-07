<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    use HasFactory;

    protected $table = "products";
    protected $fillable = ['nama_product', 'tgl_lahir', 'line', 'parent','note','harga_product',
                            'desc_product', 'pic_product', 'category_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
