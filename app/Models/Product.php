<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
        'active'
    ];

    public function orders(): BelongsToMany
    {
        return $this->BelongsToMany(Order::class)
            ->withPivot('total_price', 'total_order');
    }
}