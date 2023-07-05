<?php
namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function subCategoryProducts($sub_category_id)
    {
        $Category = new Category();
        $categories = $Category->subcategries();
        $categoryDetails = $Category->details($sub_category_id);
        $products = DB::table('products')
        ->leftJoin('sub_categories', 'sub_categories.id', '=', 'products.sub_category_id')
        ->select('sub_categories.name AS sub_cat', 'products.*')
        ->where('sub_categories.friendly_name', $sub_category_id)
        ->get();

        return view('shop',['categories' => $categories, 'products' => $products, 'categoryDetails' => $categoryDetails]);
    }

    public function subcategories()
    {
        $subcategories = DB::table('sub_categories')->get();
        return view('shop',['subcategories' => $subcategories]);
    }
}
