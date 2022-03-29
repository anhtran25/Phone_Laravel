<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    
    public function productIndex()
    {
        
        $products = Product::
            where('id', '>', 0)
            ->paginate(5);
            

        return view('admin.product.index',compact('products'));
    }
    public function createProduct()
    {
        
        return view('admin.product.create');
        
    }
    public function storeProduct(Request $request)
    {
        $productData = $request->validate([
            'name' => 'required|unique:categories|max:255|min:6',
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
        

        $product->save();

        return redirect()->route('productIndex');
    }
    public function editProduct(Product $id)
    {
        
        return view('admin.product.create', ['product' => $id]);
    }
    public function updateProduct(Request $request, Product $id)
    {
        
       $productUpdate = $id;
       $productUpdate->name = $request->name;
       $productUpdate->price = $request->price;
       $productUpdate->quantity = $request->quantity;
       $productUpdate->image = $request->image;
       $productUpdate->descripton = $request->descripton;
    //    $productUpdate->slug = Str::slug($request->name) . ' - ' . uniqid();
       $productUpdate->status = $request->status;
       $productUpdate->category_id = $request->category_id;

       $productUpdate->updateProduct();
       return redirect()->route('productIndex');

    }
    public function deleteProduct($id){
        
        Product::destroy($id);
        return redirect()->route('productIndex');

    }
}
