<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\Storage;

/**
 * Class ProductService
 * @package App\Services
 */
class ProductService
{
    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAllProducts()
    {
        return $this->product->with('category', 'manufacturer')->withFilters(
            request()->input('prices', []),
            request()->input('categories', []),
            request()->input('manufacturers', [])
        )->get();
    }


    public function addNewProduct($data, $file)
    {
        $filePath = Storage::disk('public')
            ->put('products', $file);

        $data['image'] = $filePath;

        return $this->product->create($data);
    }

    public function editProduct($data, $request, $product)
    {
        if ($request->file('image')) {
            Storage::disk('public')
                ->delete($product->image);
            $filePath = Storage::disk('public')
                ->put('products', $request->file('image'));
            $data['image'] = $filePath;
        } else {
            unset($data['image']);
        }


        return $product->update($data);
    }
}
