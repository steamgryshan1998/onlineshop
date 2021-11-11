<?php

namespace App\Observers;

use App\Models\Product;
//класс Наблюдатель присваивает значение полю рейтинга до того как модель будет сохранена в БД
class ProductObserver
{
    public function creating(Product $product)
    {
        $product->rating = rand(1, 5);
    }
}
