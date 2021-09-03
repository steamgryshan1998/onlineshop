<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProductResource;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('category','manufacturer')->withFilters(
            request()->input('prices', []),
            request()->input('categories', []),
            request()->input('manufacturers', [])
        )->get();

        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ProductRequest $request
     * @return ProductResource
     */
    public function store(ProductRequest $request): ProductResource
    {
        $filePath = Storage::disk('public')
            ->put('products', $request->file('image'));
        $data = $request->validated();
        $data['image'] = $filePath;
        $createdProduct = Product::create($data);

        return new ProductResource($createdProduct);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return new ProductResource(Product::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ProductUpdateRequest $request
     * @param Product $product
     * @return ProductResource
     */
    public function update(ProductUpdateRequest $request, Product $product): ProductResource
    {
        $data = $request->validated();
        if($request->file('image')) {
            Storage::disk('public')
                ->delete($product->image);
            $filePath = Storage::disk('public')
                ->put('products', $request->file('image'));
            $data['image'] = $filePath;
        }
        $product->update($data);
        $addedProduct = Product::find($product->id);

        return new ProductResource($addedProduct);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return JsonResponse
     */
    public function destroy(Product $product): JsonResponse
    {
        $product->delete();

        return response()->json();
    }
}
