<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'price']; //campos para receber informações sobre a criação desse produto

    //converte o inteiro para float
    public function getPriceAttribute()
    {
        return $this->attributes['price'] / 100; //1990 -> 19.9
    }

    //salva o float para inteiro
    public function setPriceAttribute($attr)
    {
        $this->attributes['price'] = $attr * 100; //19.90 -> 1990
    }

    public function store()
    {
        return $this->belongsTo(Store::class);
    }
}
