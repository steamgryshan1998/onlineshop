<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Http\Resources\CategoryResource;
use App\Http\Requests\CategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    public function index()
    {

        //todo бизнес логика должна быть в одном месте, либо в модели либо в контроллере либо в сервисе.
        // пренесем в сервис всю логику. Здесь оставим только вызов сервиса и вывод данных
        // добавить валидацию запросов

        $categories = Category::withCount(['products' => function ($query) {

            $pricesArray =  request()->input('prices', []);
            $categories = request()->input('categories', []);
            $manufacturers = request()->input('manufacturers', []);

            if (count($manufacturers) > 0) {
                $query->whereIn('manufacturer_id', $manufacturers);
            }

//                ->when(count($categories), function ($query) use ($categories) {
//                    $query->whereIn('category_id', $categories);
//                })
//                ->when(count($prices), function ($query) use ($prices) {
            //todo передать выбранные цены массивом опций (цена от, цена до) и делать выборку в базе по этому массиву. Здесь и в Присе сревисе

            if (count($pricesArray) > 0) {
                $query->where(function ($query) use ($pricesArray) {

                    foreach ($pricesArray as $prices) {
                        $query->orWhereBetween('price', [$prices['from'], $prices['to']]);
                    }
                });
            }
                    $query->where(function ($query) use ($prices) {
                        $query->when(in_array(0, $prices), function ($query) {
                            $query->orWhere('price', '<', '5000');
                        })
                            ->when(in_array(1, $prices), function ($query){
                                $query->orWhereBetween('price', ['5000', '10000']);
                            })
                            ->when(in_array(2, $prices), function ($query) {
                                $query->orWhereBetween('price', ['10000', '50000']);
                            })
                            ->when(in_array(3, $prices), function ($query) {
                                $query->orWhere('price', '>', '50000');
                            });
                    });
                });
        }])
            ->get();

        return CategoryResource::collection($categories);//коллекции используют мен
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $created_category = Category::create($request->validated());


        return new CategoryResource($created_category);//в ресурсе все записывается в массив
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new CategoryResource(Category::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryUpdateRequest $request, Category $category)
    {
        $category->update($request->validated());
        return new CategoryResource($category);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
    }
}
