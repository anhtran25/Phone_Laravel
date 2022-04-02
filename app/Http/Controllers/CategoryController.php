<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Str;
class CategoryController extends Controller
{
    
    public function categoryIndex()
    {
        
        $categories = Category::
            where('id', '>', 0)
            ->paginate(5);
            

        return view('admin.category.index',compact('categories'));
    }

    public function create()
    {
        // return ve view tao moi category
        return view('admin.category.create');
        
    }
    public function store(Request $request)
    {
        $categoryData = $request->validate([
            'name' => 'required|unique:categories|max:255|min:6',
            'description' => 'min:6',
            'status' => 'required',
        ],
        [
            'name.required' => ' Khong duoc de trong ten',
            'name.max' => 'Ten khong duoc qua 255 ki tu',
            'name.min' => 'Ten phai nhieu hon 6 ki tu',
            'description.min' => 'Mo ta phai nhieu hon 6 ki tu',
            'status.required' => 'Yeu cau chon trang thai',

        ]
    );

        // dd($categoryRequest);
        $category = new Category();
        $category->fill($categoryData);
        $category->slug = Str::slug($request['name']).uniqid();
        

        $category->save();

        return redirect()->route('categoryIndex');
    }
    public function edit(Category $id)
    {
        
        return view('admin.category.create', ['category' => $id]);
    }
    public function update(Request $request, Category $id)
    {
        
       $cateUpdate = $id;
       $cateUpdate->name = $request->name;
       $cateUpdate->description = $request->description;
       $cateUpdate->slug = Str::slug($request->name) . ' - ' . uniqid();
       $cateUpdate->status = $request->status;
       $cateUpdate = $request->validate([
        'name' => 'required|unique:categories|max:255|min:6',
        'description' => 'min:6',
        'status' => 'required',
    ],
    [
        'name.required' => ' Khong duoc de trong ten',
        'name.max' => 'Ten khong duoc qua 255 ki tu',
        'name.min' => 'Ten phai nhieu hon 6 ki tu',
        'description.min' => 'Mo ta phai nhieu hon 6 ki tu',
        'status.required' => 'Yeu cau chon trang thai',

    ]
);

       $cateUpdate->update();
       return redirect()->route('categoryIndex');

    }
    public function delete($id){
        // Casch1: destroy
        // $product=Product::where('category_id',$id)->get();
        Category::destroy($id);

        // $categoryDelete = Category::destroy($id);
        return redirect()->route('categoryIndex')->with('message','Xóa thành công !');

        
    }
}
