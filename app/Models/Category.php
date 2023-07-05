<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;
    protected $table = 'catgories';

    public function subcategries()
    {
        $formatted = null;

        $categories = DB::table('sub_categories')
        ->leftJoin('categories', 'categories.id', '=', 'sub_categories.category_id')
        ->select('categories.name AS category', 'sub_categories.*')
        ->get();

        foreach($categories as $category)
        {
            $formatted[$category->category][$category->friendly_name] = $category->name;
        }

        return $formatted;
    }

    public function details($sub_category_id)
    {

        $categories = DB::table('sub_categories')
        ->join('categories', 'categories.id', '=', 'sub_categories.category_id')
        ->select('categories.name AS category', 'sub_categories.*')
        ->where('sub_categories.friendly_name', $sub_category_id)
        ->first();

        return $categories;
    }
}
