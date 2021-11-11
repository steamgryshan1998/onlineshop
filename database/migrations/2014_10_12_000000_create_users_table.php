<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
/*В Laravel имя таблицы должно указываться во множественном числе, или передаваться через переменную, правила фреймворка
для создания таблицы используется метод create из родительского класса Schema*/
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');//string - тип поля
            $table->string('email')->unique();
            $table->string('password');
            $table->enum('role',['user', 'admin']);//метод enum позволяет выбрать значение поля вручную через СУБД
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        /*Для прекращения работы таблицы users используется метод dropIfExists*/
        Schema::dropIfExists('users');
    }
}
