<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    
    public function productIndex()
    {
        
        $products = Product::with('category')
            ->where('id','>','0')
            ->paginate(5);
            

        return view('admin.product.index',compact('products'));
    }
    public function createProduct()
    {
        $category = Category::all();
        return view('admin.product.create',compact('category'));
        
    }
    public function storeProduct(Request $request)
    {
        $productData = $request->validate([
            'name' => 'required|max:255|min:6',
            'price'=> 'required|integer',
            'quantity'=>'required|integer',
            'image'=>'min:5',
            'descripton' => 'min:6',
            'status' => 'required',
            'category_id'=>'required|integer',
        ],
        [
            'name.required' => ' Khong duoc de trong ten',
            'name.max' => 'Ten khong duoc qua 255 ki tu',
            'name.min' => 'Ten phai nhieu hon 6 ki tu',
            'price.required'=> 'Gia phai nhap',
            'price.integer'=>'Gia phai la chu so',
            'quantity.required'=> 'Gia phai nhap',
            'quantity.integer'=>'Gia phai la chu so',
            'descripton.min' => 'Mo ta phai nhieu hon 6 ki tu',
            'status.required' => 'Yeu cau chon trang thai',
            'category_id.integer'=>'Id danh muc phai la chu so',

        ]
    );

        
        $product = new Product();
        $product->fill($productData);
        // $product->slug = Str::slug($request['name']).uniqid();
        $file = $request->image->getClientOriginalName();
        $newName=($product->name.$file);
        $request->image->storeAs('public/images', $product->name.$file);
        $product->image=$newName;
       


        $product->save();

        return redirect()->route('productIndex');
    }
    public function editProduct( $id)
    {
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.product.create',compact('category','product'));
    }
    public function updateProduct(Request $request, $id)
    {
        // dd($request);
        $productUpdate = $request->validate([
            'name' => 'required|max:255|min:6',
            'price'=> 'required|integer',
            'quantity'=>'required|integer',
            'image'=>'min:5',
            'descripton' => 'min:6',
            'status' => 'required',
            'category_id'=>'required|integer',
        ],
        [
            'name.required' => ' Khong duoc de trong ten',
            'name.max' => 'Ten khong duoc qua 255 ki tu',
            'name.min' => 'Ten phai nhieu hon 6 ki tu',
            'price.required'=> 'Gia phai nhap',
            'price.integer'=>'Gia phai la chu so',
            'quantity.required'=> 'Gia phai nhap',
            'quantity.integer'=>'Gia phai la chu so',
            'descripton.min' => 'Mo ta phai nhieu hon 6 ki tu',
            'status.required' => 'Yeu cau chon trang thai',
            'category_id.integer'=>'Id danh muc phai la chu so',
    
        ]
    );
        $productUpdate = Product::find($id);
       $productUpdate->name = $request->name;
       $productUpdate->price = $request->price;
       $productUpdate->quantity = $request->quantity;
    //    $productUpdate->image = $request->image;
       $productUpdate->descripton = $request->descripton;
    //    $productUpdate->slug = Str::slug($request->name) . ' - ' . uniqid();
       $productUpdate->status = $request->status;
       $productUpdate->category_id = $request->category_id;
       $file = $request->image->getClientOriginalName();
        $newName=($productUpdate->name.$file);
        $request->image->storeAs('public/images', $productUpdate->name.$file);
        $productUpdate->image=$newName;

   
       

       $productUpdate->save();
       return redirect()->route('productIndex');

    }
    public function deleteProduct($id){
        
        Product::destroy($id);
        return redirect()->route('productIndex');

    }
}
