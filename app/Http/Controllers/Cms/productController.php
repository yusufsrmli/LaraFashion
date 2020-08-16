<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\color_product;
use App\Models\Colors;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class productController extends Controller
{
    public function index()
    {
        $sizes = Size::all();
        View::share('sizes',$sizes);
        $categories = Category::all();
        View::share('categories',$categories);
        $colors = Colors::all();
        View::share('colors',$colors);
        $brands = Brand::all();
        View::share('brands',$brands);


        return view('Cms.news.product');
    }

    public function list(){
        $products = Product::all();
        View::share('products',$products);

        return view('CMS.lists.productList');
    }


    public function create_product(Request $request)
    {
        $request -> validate([
            'image' => 'required',
            'product_name' => 'required',
            'brand_id' => 'required',
            'colors.*' => 'required|distinct',
            'category_id' => 'required' ,
            'size_id' => 'required' ,
            'product_price'=>'required',
        ]);

        $product = new Product();
        $product->fill($request ->all());

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file->move(public_path() . '/images/news', $file->getClientOriginalName());
            $product->image = $file->getClientOriginalName();
        }

        $product -> save();

        foreach ($request -> colors as $key_color => $color)
        {
            $colorProduct = new color_product();
            $colorProduct->color_id =$color;
            $colorProduct->product_id =$product->id;

            $colorProduct->save();
        }

        return redirect()->route('Cms.news.product');

    }

}
