@extends('admin.master')

@section('content')
@section(
    'title',
    isset($user) ? 'User Edit' : 'User Create'
)

<form action="{{isset($user)
    ? route('updateUser', $user->id)
    : route('storeUser') }}" 
class="form"
 method="POST">
 @if (isset($user))
 @method('PUT')
 @endif
     
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input
            name="name"
            class="form-control"
            id="name"
            value="{{isset($user) ? $user->name : ''}}"
        />
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input
            name="email"
            type="email"
            class="form-control"
            id="email"
            value="{{isset($user) ? $user->email : ''}}"
        />
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input
            name="password"
            class="form-control"
            type="password"
            id="password"
            value="{{isset($user) ? $user->password : ''}}"
        />
        @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <input
            type="radio"
            name="status"
            id="status"
            value="0"
            {{isset($user) && $user->status == 0 ? 'checked' : ''}}
        >
        <label for="status">Deactive</label>
    </div>
    <div class="form-group">
        <input
            type="radio"
            name="status"
            id="status"
            value="1"
            {{isset($user) && $user->status == 1 ? 'checked' : ''}}
        >
        <label for="status">Active</label>
    </div>
    @error('status')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('userIndex')}}" class="btn btn-warning">
            Cancel
        </a>
    </div>
</form>

@endsection