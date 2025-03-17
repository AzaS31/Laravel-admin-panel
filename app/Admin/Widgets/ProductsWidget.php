<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use TCG\Voyager\Widgets\BaseDimmer;

class ProductsWidget extends BaseDimmer
{
    /**
     * The widget's run function.
     */
    public function run()
    {
        $productCount = Product::count();

        return view('admin.widgets.products', compact('productCount'));
    }
}
