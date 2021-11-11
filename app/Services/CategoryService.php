<?php

namespace App\Services;

use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use InvalidArgumentException;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * Class CategoryService
 * @package App\Services
 */
class CategoryService
{
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;//через конструктор создаем объект класса Category
    }

    public function getAllCategories()
    {
        return $this->category->withCount(['products' => function ($query) {//withCount - подсчет количества допустимых продуктов(в зависимости от выбранных чекбоксов на фронте)
            $query->withFilters(//вызываем метод withFilters
                request()->input('prices', []),//запрашивает ввод
                request()->input('categories', []),
                request()->input('manufacturers', [])
            );
        }])
            ->get();
    }

    public function addNewCategory($data)
    {
        $validator = Validator::make($data, [//генерируем новый экземпляр класса Validator
            'name' => 'required|min:5',
        ]);

        if ($validator->fails()) {//искючение если валидация не пройдена
            throw new InvalidArgumentException($validator->errors()->first());
        }

        return Category::create($data);//создаем новую валидированную категорию
    }

    /**
     * @param int $id
     * @return array|int[]
     */
    public function getCategoryById(int $id): array
    {
        $result = ['status' => 200];
        try {
            $result['data'] = Category::find($id);//пытаемся выловить по id категорию
        } catch (Exception $e) {
            $result = [
                'status' => 500,//если не выходит то ловим исключение
                'error' => $e->getMessage()
            ];
        }
        return $result;//возвращаем массив с нужной категорией и статусом
    }

    public function editCategory($data, $id)
    {
        $validator = Validator::make($data, [//генерируем новый экземпляр класса Validator
            'name' => 'required|min:5',
        ]);

        if ($validator->fails()) {//искючение если валидация не пройдена
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();//метод для начала осуществления транзакции обновленной категории в БД вручную

        try {
            $updated_category = $this->category->where('id', $id)->update($data);//пробуем обновить категорию, найдя ее по ее id

        } catch (Exception $e) {//в случае провала ловим исключение
            DB::rollBack();//производим откат транзакции
            Log::info($e->getMessage());//записываем в журнал логов сообщение об ошибке

            throw new InvalidArgumentException('Unable to update post data');
        }

        DB::commit();//подтверждаем транзакцию в БД

        return $updated_category;//возвращаем обновленную категорию
    }
}
