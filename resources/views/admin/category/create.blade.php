@extends('admin.master')

@section('content')
@section(
    'title',
    isset($category) ? 'Category Edit' : 'Category Create'
)

<form action="{{isset($category)
    ? route('update', $category->id)
    : route('store') }}" 
class="form"
 method="POST">
 @if (isset($category))
 @method('PUT')
 @endif
     
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input
            name="name"
            class="form-control"
            id="name"
            value="{{isset($category) ? $category->name : ''}}"
        />
        @error('name')
            <div class="alert text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input
            name="description"
            class="form-control"
            id="description"
            value="{{isset($category) ? $category->description : ''}}"
        />
        @error('description')
            <div class="alert text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <input
            type="radio"
            name="status"
            id="status"
            value="0"
            {{isset($category) && $category->status == 0 ? 'checked' : ''}}
        >
        <label for="status">Deactive</label>
    </div>
    <div class="form-group">
        <input
            type="radio"
            name="status"
            id="status"
            value="1"
            {{isset($category) && $category->status == 1 ? 'checked' : ''}}
        >
        <label for="status">Active</label>
    </div>
    @error('status')
            <div class="alert text-danger">{{ $message }}</div>
        @enderror

    <div class="form-group">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('categoryIndex')}}" class="btn btn-warning">
            Cancel
        </a>
    </div>
</form>

@endsection