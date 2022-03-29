@extends('admin.home')

@section('content')
@section(
    'title',
    isset($product) ? 'Product Edit' : 'Product Create'
)

<form action="{{isset($product)
    ? route('updateProduct', $product->id)
    : route('storeProduct') }}" 
class="form"
 method="POST">
 @if (isset($product))
 @method('PUT')
 @endif
     
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input
            name="name"
            class="form-control"
            id="name"
            value="{{isset($product) ? $product->name : ''}}"
        />
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input
            name="price"
            type="number"
            class="form-control"
            id="price"
            value="{{isset($product) ? $product->price : ''}}"
        />
        @error('price')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="quantity">Quantity</label>
        <input
            name="quantity"
            class="form-control"
            type="number"
            id="quantity"
            value="{{isset($product) ? $product->quantity : ''}}"
        />
        @error('quantity')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input
            name="image"
            class="form-control"
            id="image"
            value="{{isset($product) ? $product->image : ''}}"
        />
        @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="descripton">Descripton</label>
        <input
            name="descripton"
            class="form-control"
            id="descripton"
            value="{{isset($product) ? $product->descripton : ''}}"
        />
        @error('descripton')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <input
            type="radio"
            name="status"
            id="status"
            value="0"
            {{isset($product) && $product->status == 0 ? 'checked' : ''}}
        >
        <label for="status">Deactive</label>
    </div>
    <div class="form-group">
        <input
            type="radio"
            name="status"
            id="status"
            value="1"
            {{isset($product) && $product->status == 1 ? 'checked' : ''}}
        >
        <label for="status">Active</label>
    </div>
    @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="form-group">
            <label for="category_id">ID Danh mục</label>
            <input
            type="number"
                name="category_id"
                class="form-control"
                id="category_id"
                value="{{isset($product) ? $product->category_id : ''}}"
            />
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Sumit</button>
        <a href="{{route('productIndex')}}" class="btn btn-warning">
            Cancel
        </a>
    </div>
</form>

@endsection