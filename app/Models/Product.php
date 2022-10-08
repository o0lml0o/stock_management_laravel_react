<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['name','codebar','qauntity','store_id'];
    use HasFactory;

    public function sotre(){
        $this->hasOne(Store::class);
    }
    public function orders()
    {
        $this->belongsToMany(Order::class);
    }

}
