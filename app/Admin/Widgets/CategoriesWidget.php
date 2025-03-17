<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use TCG\Voyager\Widgets\BaseDimmer;

class CategoriesWidget extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * The widget's run function.
     */
    public function run()
    {
        // Получаем количество категорий
        $categoryCount = Category::count();

        // Возвращаем представление с количеством категорий
        return view('admin.widgets.categories', compact('categoryCount'));
    }
}
