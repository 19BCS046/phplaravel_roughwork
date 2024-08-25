<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Category extends Model
{
    use HasFactory;
    public function items(): HasManyThrough
    {
        return $this->hasManyThrough(Item::class,Type::class,'category_id', 'type_id');
    }

}
