@extends('admin.index')
@section('content')

@include('layouts.messages')

@if ($products->all())
    <table class="table">
        <tr>
            <th>شناسه</th>
            <th>نام</th>
            <th>قیمت</th>
            <th>دسته بندی</th>
            <th>مدیریت</th>
        </tr>
        @foreach ($products as $product)
            @switch($product->status)
                @case(0)
                    @php
                        $status = 'ناموجود';
                        $status_class = 'bg-danger';
                    @endphp
                    @break
                @case(1)
                    @php
                        $status = 'موجود';
                        $status_class = 'bg-success';
                    @endphp
                    @break
                @default
            @endswitch
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->category->name}}</td>
                <td>
                    <div class="center-center">
                        <a href="{{route('products.changeStatus', $product->id)}}" class="badge {{$status_class}} mx-1">{{$status}}</a>
                        <a href="{{route('products.edit', $product->id)}}" class="badge bg-warning mx-1">ویرایش</a>
                        <form action="{{route('products.destroy', $product->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit"  class="badge bg-danger border-0 mx-1"  onclick="return confirm('آیا مطمئنید؟')">حذف</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
    <div class="paginate">
        {{ $products->links("pagination::bootstrap-4") }}
    </div>
@else
هیچ محصولی وجود ندارد
@endif

@endsection
