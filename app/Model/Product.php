<?php
use App\Model\Review;
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //has many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
