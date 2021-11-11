<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'description', 'price', 'manufacturer_id', 'image', 'rating'];
/*protected - значит свойство $fillable доступно только из текущего класса и классов-наследников
 в свойстве $fillable - описываются поля, допустимые для массового присвоения(чтобы указанные свойства продукта
передавались в конструктор а потом и на сервер в виде ассоциативного массива, а не устанавливались каждое по
отдельности), грубо говоря то, что выбирает и добавляет пользователь если это безопасно*/

    public function category(): ?BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
/*метод BelongsTo позволяет получить доступ к категории, к которой относится данный продукт, при помощи внешнего ключа
category_id(он находится в таблице БД продукта и эквивалентен свойству id в таблице категорий)*/

    public function manufacturer(): ?BelongsTo
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id');
    }
/*метод BelongsTo позволяет получить доступ к производителю, к которой относится данный продукт, при помощи внешнего
ключа manufacturer_id(он находится в таблице БД продукта и эквивалентен свойству id в таблице производителей)*/


/*scope - это модель для построения кастомных запросов к БД, если необходимо вывести что-либо уникальное. scope может
использоваться в Laravel как alias(ярлык, позволяющий ссылаться на другую команду через более запоминающиеся
слова, сокращения или символы)*/
/*scopeWithFilters - метод для фильтрации продуктов в зависимости от категорий цен и производителей*/
    public function scopeWithFilters($query, $prices, $categories, $manufacturers)
    {
/*$query - конструктор запросов, метод when() - выполняет функцию во втором параметре, если первый - true ,
whereIn() - убирает элементы из коллекции, если во втором параметре(массиве), нет первого параметра
where - фильтрует коллекцию по указанным параметрам ключ/значение*/
        return $query->when(count($manufacturers), function ($query) use ($manufacturers) {
            $query->whereIn('manufacturer_id', $manufacturers);
        })
            ->when(count($categories), function ($query) use ($categories) {
                $query->whereIn('category_id', $categories);
            })
            ->when(count($prices), function ($query) use ($prices) {
                $query->where(function ($query) use ($prices) {
                    $query->when(in_array(0, $prices), function ($query) {
                        $query->orWhere('price', '<', '5000');
                    })
                        ->when(in_array(1, $prices), function ($query) {
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
    }
}
