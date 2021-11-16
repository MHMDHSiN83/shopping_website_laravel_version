@extends('admin.index')
@section('content')

@include('layouts.messages')

<form method="post" action="{{route('products.store')}}" class="add-product" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="نام محصول" value="{{old('name')}}">
    <br>
    <input type="text" name="price" placeholder="قیمت محصول" value="{{old('price')}}">
    <br>
    <span>انتخاب دسته بندی:</span>
    <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{$category->id}}" @if (old('category_id') == $category->id) {{'selected'}} @endif >{{$category->name}}</option>
        @endforeach
    </select>
    <br>
    <div class="input-group">
        <span class="input-group-btn">
          <a id="lfm" data-input="image" data-preview="holder" class="btn btn-primary">
            <i class="fa fa-picture-o"></i> انتخاب
          </a>
        </span>
        <input id="image" class="form-control" type="text" name="image" value="{{old('image')}}">
      </div>
      <img id="holder" style="margin-top:15px;max-height:100px;" src="">
    <br>
    <input type="number" name="warranty" placeholder="مدت گارانتی (ماه)"  value="{{old('warranty')}}">
    <br>
    <input type="text" name="weight" placeholder="وزن محصول (گرم)" value="{{old('weight')}}">
    <textarea name="description" id="editor" placeholder="توضیحات محصول">{{old('description')}}</textarea><br>
    <span>انتخاب وضعیت:</span>
    <select name="status">
        <option value="0">ناموجود</option>
        <option value="1" @if (old('status') == 1) {{'selected'}} @endif>موجود</option>
    </select><br>
    <input type="submit" value="افزودن محصول">
    <a href="{{route('products.index')}}" class="btn btn-primary">بازگشت</a>
</form>

@endsection
