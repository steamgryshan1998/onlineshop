<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function products()
    {
        return $this->hasMany(Product::class, 'manufacturer_id');
    }
/*метод hasMany позволяет получить доступ ко всем производителям, внешний ключ manufacturer_id которых эквивалентен
свойству id в таблице производителей*/
}
