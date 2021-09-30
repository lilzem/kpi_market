<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'image',
        'name',
        'description'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function getImageURI() {
        return "/images/items/{$this->image}";
    }
}
