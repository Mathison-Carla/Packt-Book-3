<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['state', 'price', 'category_id'];

    public function category(): BelongsTo
        {
            return $this->belongsTo(Category::class);
        }
}

