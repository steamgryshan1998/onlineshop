<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'description', 'price', 'manufacturer_id', 'image'];

    const PRICES = [
        ['from'=> 0, 'to' => 5000, 'name' => 'Less than 5000'],
        'From 5000 to 10000',
        'From 10000 to 50000',
        'More than 50000',
    ];

    public function category(): ?BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function manufacturer(): ?BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id');
    }

    public function scopeWithFilters($query, array $prices, $categories, $manufacturers)
    {
//        return $query->when(count($manufacturers), function ($query) use ($manufacturers) {
//            $query->whereIn('manufacturer_id', $manufacturers);
//        })
//            ->when(count($categories), function ($query) use ($categories) {
//                $query->whereIn('category_id', $categories);
//            })
//            ->when(count($prices), function ($query) use ($prices) {
//                $query->where(function ($query) use ($prices) {
//                    $query->when(in_array(0, $prices), function ($query) {
//                        $query->orWhere('price', '<', '5000');
//                    })
//                        ->when(in_array(1, $prices), function ($query) {
//                            $query->orWhereBetween('price', ['5000', '10000']);
//                        })
//                        ->when(in_array(2, $prices), function ($query) {
//                            $query->orWhereBetween('price', ['10000', '50000']);
//                        })
//                        ->when(in_array(3, $prices), function ($query) {
//                            $query->orWhere('price', '>', '50000');
//                        });
//                });
//            });
    }

    public function scopeFilterByPrices($query, $pricesArray) {

        $query->where(function ($query) use ($pricesArray) {
            foreach ($pricesArray as $prices) {
                $query->orWhereBetween('price', [$prices['from'], $prices['to']]);
            }
        });

        return $query;
    }

}
