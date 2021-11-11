<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFielsToProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('manufacturer_id')//создаем внешний ключ manufacturer_id при помощи методы foreignId
                ->references('id')//который должен соответствовать свойству id
                ->on('manufacturers')//в таблице производителей
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
        });
/*cascadeOnUpdate - метод, подтягивающий измененное значение имени производителя(через внешний ключ)
cascadeOnDelete - метод, позволяющий удалить все продукты, если был удален производитель(через внешний ключ)
*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn('manufacturer_id');
        });
    }
}
