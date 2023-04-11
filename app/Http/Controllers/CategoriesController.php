<?php

namespace App\Http\Controllers;

class CategoriesController extends Controller



{
    public function show($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $products = $category->products()->orderBy('recent')->paginate(15);
        return view('category.product', [
            'product' => $products,
            'category' => $category
        ]);
    }


    public function slug() {


    }


}

?>
