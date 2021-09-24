<?php

namespace App\Services;

use App\Models\Product;

class PriceService
{
    private $prices;
    private $categories;
    private $manufacturers;

    public function getPrices($prices, $categories, $manufacturers)
    {
        $this->prices = $prices;
        $this->categories = $categories;
        $this->manufacturers = $manufacturers;
        $formattedPrices = Product::PRICES;

        foreach($formattedPrices as $index => $value) {
            $formattedPrices[$index]['products_count'] = $this->getProductCount($index);
        }

        return $formattedPrices;
    }

    private function getProductCount($index)
    {
        return Product::withFilters($this->prices, $this->categories, $this->manufacturers)
            ->when($index == 0, function ($query) {
                $query->where('price', '<', '5000');
            })
            ->when($index == 1, function ($query) {
                $query->whereBetween('price', ['5000', '10000']);
            })
            ->when($index == 2, function ($query) {
                $query->whereBetween('price', ['10000', '50000']);
            })
            ->when($index == 3, function ($query) {
                $query->where('price', '>', '50000');
            })
            ->count();
    }
}
