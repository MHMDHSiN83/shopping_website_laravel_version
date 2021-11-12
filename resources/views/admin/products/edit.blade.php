@extends('admin.index')
@section('content')

@include('layouts.messages')

<form method="post" action="{{route('products.update', $product->id)}}" class="add-product" enctype="multipart/form-data">
    @csrf
    @method('put')
    <input type="text" name="name" placeholder="نام محصول" value="{{$product->name}}">
    <br>
    <input type="text" name="price" placeholder="قیمت محصول" value="{{$product->price}}">
    <br>
    <span>انتخاب دسته بندی:</span>
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{$category->id}}" @if ($category->id == $product->category->id){{'selected'}}@endif>{{$category->name}}</option>
        @endforeach
    </select><br>
    <br>
    {{-- <span>انتخاب عکس:</span>
    <input type="file" name="image"> --}}
    <br>
    <input type="number" name="warranty" placeholder="مدت گارانتی (ماه)"  value="{{$product->warranty}}">
    <br>
    <input type="text" name="weight" placeholder="وزن محصول (گرم)" value="{{$product->weight}}">
    <textarea name="description" id="editor" placeholder="توضیحات محصول">{{$product->description}}</textarea><br>
    <span>انتخاب وضعیت:</span>
    <select name="status" >
        <option value="0">ناموجود</option>
        <option value="1" @if ($product->status) {{'selected'}} @endif>موجود</option>
    </select><br>
    <input type="submit" value="ویرایش محصول">
    <a href="{{route('products.index')}}" class="btn btn-primary">بازگشت</a>
</form>

@endsection
