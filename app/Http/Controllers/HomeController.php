<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Str;
class HomeController extends Controller
{
 
    //
    public function homeIndex()
    {
        $category = Category::all();
        $products = Product::with('category')
        
            ->where('status','>','0')
            ->paginate(4);
            
        return view('welcome',compact('products','category'));
        
    }
}
