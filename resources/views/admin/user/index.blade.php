


@extends('admin.master')
@section('title','Admin Users')
@section('content')
<button class=""><a href="{{route('addUser')}}" class="btn btn-warning">Create Users</a></button>

<table class="table table-hover">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        {{-- <th>Password</th> --}}
        <th>Status</th>
        <th>Created at</th>
        <th>Updated at</th>
        <th>Action</th>
    </thead>
    <tbody>
        @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    {{-- <td>{{ $user->password }}</td> --}}
                    <td>{{ $user->status == 1 ? 'Active' : 'Deactive' }}</td>
                    <td>{{ $user->created_at ?: 'N/A' }}</td>
                    <td>{{ $user->updated_at ?: 'N/A' }}</td>
                    {{-- <td><button class="btn btn-primary" type="submit"><a href="{{route('delete',['id'=>$category->id])}}">Xóa</a></button></td> --}}
                    <td>
                        <a
                            href="{{route('editUser', $user->id)}}"
                            class="btn btn-warning"
                        > Edit.... </a>
                        <form
                            action="{{route('deleteUser', $user->id)}}"
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
          
    {!!$users->links()!!}
  
</div>

@endsection