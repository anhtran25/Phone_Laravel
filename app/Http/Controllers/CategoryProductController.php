<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\Product;
class CategoryProductController extends Controller
{
    
    public function postIndex()
    {
        
        $post = Post::paginate(5);
        $post->load('cate');
        $pro=Product::all();
        return view('admin.post.index',compact('post','pro'));
    }
    
}
