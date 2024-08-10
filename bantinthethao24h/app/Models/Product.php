<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "description",
        "slug",
        "image",
        "category_id",
        "tomtat",
        "stock",
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
