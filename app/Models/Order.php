<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['name', 'city', 'phone', 'email', 'our_shop', 'nova_poshta', 'courier', 'total_qty', 'total_price'];

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
