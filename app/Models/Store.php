<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description']; //campos para receber informações sobre a criação desse produto

    public function products()
    {
        return $this->hasMany(Product::class); //search for store_id
    }
}
