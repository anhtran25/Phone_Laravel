


@extends('admin.home')
@section('title','Admin Products')
@section('content')
<button class=""><a href="{{route('addProduct')}}" class="btn btn-warning">Create Products</a></button>

<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Image</th>
        <th>Description</th>
        {{-- <th>Slug</th> --}}
        <th>Status</th>
        <th>Category_ID</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->price }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td><img width="200" src="{{ $product->image }}" alt=""></td>
                    
                    <td>{{ $product->descripton}}</td>
                    {{-- <td>{{ $product->slug ?: 'N/A' }}</td> --}}
                    <td>{{ $product->status == 1 ? 'Active' : 'Deactive' }}</td>
                    <td>{{ $product->category_id }}</td>
                    <td>{{ $product->created_at ?: 'N/A' }}</td>
                    <td>{{ $product->updated_at ?: 'N/A' }}</td>
                    {{-- <td><button class="btn btn-primary" type="submit"><a href="{{route('delete',['id'=>$category->id])}}">Xóa</a></button></td> --}}
                    <td>
                        <a
                            href="{{route('editProduct', $product->id)}}"
                            class="btn btn-warning"
                        > Edit.... </a>
                        <form
                            action="{{route('deleteProduct', $product->id)}}"
                            method="POST"
                        >
                            @method('DELETE')
                            {{-- <input type="text" name="_method" value="DELETE"> --}}
                            @csrf
                            {{-- <input type="text" name="csrf_token" value="asdadasd"> --}}
                            <button type="submit" class="btn btn-danger">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
        @endforeach
    </tbody>
</table>
<div  class=" dataTables_pager">
          
    {!!$products->links()!!}
  
</div>

@endsection