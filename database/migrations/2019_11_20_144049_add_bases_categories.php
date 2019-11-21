<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBasesCategories extends Migration
{

    public function up()
    {
        DB::table('course_categories')->truncate();
        // Insert
        DB::table('course_categories')->insert(
            [
                [
                    'id' => 1,
                    'name_ru' => 'Онлайн курсы',
                    'name_uk' => 'Онлайн курсы ukr',
                    'slug' => 'online',
                    '_lft' => 1,
                    '_rgt' => 2,
                ],
                [
                    'id' => 2,
                    'name_ru' => 'Курсы',
                    'name_uk' => 'Курсы ukr',
                    'slug' => 'courses',
                    '_lft' => 3,
                    '_rgt' => 4,
                ]
            ]
        );
    }


    public function down()
    {
        DB::table('course_categories')->truncate();
    }
}
