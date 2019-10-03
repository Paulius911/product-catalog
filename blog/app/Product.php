<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    public function reviews()
    {
        return $this->hasMany(Review::class)->get();
    }

    public function tax(){
        $tax = ($this->baseprice / 100) * 21;

        $totalprice = $this->baseprice + $tax;

        return number_format((float)$totalprice, 2, '.', '');
    }

    public function discounted() {
        $percentdiscount = ($this->discount / 100) * $this->tax();

        $priceWithDiscount = $this->tax() - $percentdiscount;

        return number_format((float)$priceWithDiscount, 2, '.', '');
    }

}
