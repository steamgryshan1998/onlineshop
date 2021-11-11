<?php

namespace App\Services;

use App\Models\Product;

class PriceService
{
    private $prices;
    protected $PRICES = [
        'Less than 5000',
        'From 5000 to 10000',
        'From 10000 to 50000',
        'More than 50000',
    ];
    private $categories;
    private $manufacturers;

    public function getPrices($prices, $categories, $manufacturers)
    {
        $this->prices = $prices;
        $this->categories = $categories;
        $this->manufacturers = $manufacturers;
        $formattedPrices = [];

        foreach($this->PRICES as $index => $name) {
            $formattedPrices[] = [
                'name' => $name,
                'products_count' => $this->getProductCount($index)
            ];
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
