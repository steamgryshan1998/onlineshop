<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'category_id');
    }
/*метод hasMany позволяет получить доступ ко всем продуктам, внешний ключ category_id которых эквивалентен свойству id
в таблице категорий*/
}
