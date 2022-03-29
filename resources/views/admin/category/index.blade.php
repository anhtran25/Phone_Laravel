
<button class="btn btn-primary" type="submit"><a href="{{route('add')}}">Thêm</a></button>

@extends('admin.home')
@section('title','Admin Categories')
@section('content')
<button class=""><a href="{{route('add')}}" class="btn btn-warning">Create Category</a></button>

<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Slug</th>
        <th>Status</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->description ?: 'N/A' }}</td>
                    <td>{{ $category->slug ?: 'N/A' }}</td>
                    <td>{{ $category->status == 1 ? 'Active' : 'Deactive' }}</td>
                    <td>{{ $category->created_at ?: 'N/A' }}</td>
                    <td>{{ $category->updated_at ?: 'N/A' }}</td>
                    {{-- <td><button class="btn btn-primary" type="submit"><a href="{{route('delete',['id'=>$category->id])}}">Xóa</a></button></td> --}}
                    <td>
                        <a
                            href="{{route('edit', $category->id)}}"
                            class="btn btn-warning"
                        > Edit.... </a>
                        <form
                            action="{{route('delete', $category->id)}}"
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
          
    {!!$categories->links()!!}
  
</div>

@endsection