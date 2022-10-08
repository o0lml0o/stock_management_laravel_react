<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $fillable=['client_id'];
    use HasFactory;
    public function products(){
        return $this->belongsToMany(Product::class)->withPivot(['quantity','price']);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
}
