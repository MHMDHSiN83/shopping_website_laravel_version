@extends('admin.index')
@section('content')

@include('layouts.messages')

<form method="post" action="{{route('categories.store')}}" class="add-cat">
    @csrf
    <input type="text" name="name" class="@error('name') is-invalid @enderror">
    {{-- @error('name')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror --}}
    <br>
    <input type="submit" value="افزودن دسته بندی">
</form>
@if ($categories->all())
    <table class="table">
        <tr>
            <th>شناسه</th>
            <th>نام دسته بندی</th>
            <th>حذف دسته بندی</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td>{{$category->id}}</td>
                <td>{{$category->name}}</td>
                <td>
                    <form action="{{route('categories.destroy', $category->id)}}" method="post">
                        @csrf
                        {{ method_field('DELETE') }}
                        <button type="submit"  class="badge bg-danger border-0">حذف</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@else
هیچ دسته بندی وجود ندارد
@endif

@endsection
