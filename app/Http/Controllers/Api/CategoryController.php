<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Services\CategoryService;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    protected $categoryService;//создаем свойство

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;//через конструктор делаем свойство categoryService объектом класса CategoryService
    }

    public function index()//выводим все категории через метод index
    {
        $categories = $this->categoryService->getAllCategories();//через объект categoryService ссылаемся на метод getAllCategories()
        return CategoryResource::collection($categories);//вывод категорий на фронт в виде коллекции
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return CategoryResource
     */
    public function store(Request $request)//метод для добавления новой категории
    {
        $data = $request->only([//запрашивает только имя категории(для дальнейшей его валидации)
            'name'
        ]);
        $created_category = $this->categoryService->addNewCategory($data);//вызываем метод addNewCategory из CategoryService
        return new CategoryResource($created_category);//возвращаем на фронт созданную категорию
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return CategoryResource
     */
    public function show($id)//вылавливаем категорию по id
    {
        $category = $this->categoryService->getCategoryById($id);
        return new CategoryResource($category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, int $id)//метод для обновления категории
    {
        $data = $request->only([//запрашивает только имя категории(для дальнейшей его валидации)
            'name'
        ]);
        $updated_category = $this->categoryService->editCategory($data, $id);
        return response()->json($updated_category, "200");//возвращаем результат через json
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Category $category)//метод для удаления категории
    {
        $category->delete();//удаляем категорию из БД методом delete()
    }
}
