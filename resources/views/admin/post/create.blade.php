@extends('admin.master')

@section('content')
@section(
    'title',
    isset($post) ? 'Post Edit' : 'Post Create'
)

<form action="{{isset($post)
    ? route('updatePost', $post->id)
    : route('storePost') }}" 
class="form"
 method="POST">
 @if (isset($post))
 @method('PUT')
 @endif
     
    @csrf
    
    
        <div class="form-group">
            <label for="category_id">Danh mục</label>

            <select name="category_id" id="category_id" >
                <option>Chọn danh mục</option>
                @foreach ($category as $cate)
                
                    @if ($cate->status==1)
                    
                    <option value="{{$cate->id}}" {{(isset($post) && $cate->id == $post->category_id )? "selected" : ""}}>{{$cate->name}}</option>    
                    @endif
                @endforeach
            </select>
            
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="product_id">Sản phẩm</label>
            <select name="product_id" id="product_id" >
                <option>Chọn sản phẩm</option>
                
                @foreach ($product as $p)
               
                    @if ($p->status==1)
                    
                    <option value="{{$p->id}}" {{(isset($post) && $p->id == $post->product_id )? "selected" : ""}}>{{$cate->name}}</option>    
                    @endif
                    
                
                @endforeach
            </select>
            
            @error('product_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('postIndex')}}" class="btn btn-warning">
            Cancel
        </a>
    </div>
</form>

@endsection