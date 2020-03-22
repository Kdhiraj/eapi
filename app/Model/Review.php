<?php
use App\Model\Product;
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    //review belongs to product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
