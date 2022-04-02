


@extends('admin.master')
@section('title','Admin Post')
@section('content')
<button class=""><a href="{{route('addPost')}}" class="btn btn-warning">Create Post</a></button>

<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Category</th>
        <th>Product</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($post as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    {{-- <td>@foreach($p->cate as $cate)
                    <li>{{$cate->name}}</li>
                    @endforeach
                    </td>
                    <td>@foreach($p->pro as $pro)
                        <li>{{$pro->name}}</li>
                        @endforeach
                        </td> --}}

                    <td>{{$p->cate[0]->name}}</td>
                    <td>@foreach($p->pro as $pro)
                        <li>{{$pro->name}}</li>
                        @endforeach
                        </td> 
                    <td>{{ $p->created_at ?: 'N/A' }}</td>
                    <td>{{ $p->updated_at ?: 'N/A' }}</td>
                    {{-- <td><button class="btn btn-primary" type="submit"><a href="{{route('delete',['id'=>$category->id])}}">Xóa</a></button></td> --}}
                    <td>
                    
                        <a
                        href="{{route('editPost', $p->id)}}"
                        class="btn btn-warning"
                    > Edit.... </a>
                    <form
                        action="{{route('deletePost', $p->id)}}"
                        method="POST"
                    >
                        @method('DELETE')
                        {{-- <input type="text" name="_method" value="DELETE"> --}}
                        @csrf
                        {{-- <input type="text" name="csrf_token" value="asdadasd"> --}}
                        <button onclick="return confirm('Chắc ko bạn')" type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                    </td>
                </tr>
        @endforeach
    </tbody>
</table>
<div  class=" dataTables_pager">
          
    {!!$post->links()!!}
  
</div>

@endsection