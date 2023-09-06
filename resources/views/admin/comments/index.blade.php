@extends('admin.index')
@section('content')

@include('layouts.messages')
<table class="table">
    <tr>
        <th>شناسه</th>
        <th>نام کاربر</th>
        <th>نام محصول</th>
        <th>متن نظر</th>
        <th>مدیریت نظر</th>
    </tr>
    @foreach ($comments as $comment)
        @switch($comment->status)
            @case(0)
                @php
                    $status = 'غیرفعال';
                    $status_class = 'bg-danger';
                @endphp
                @break
            @case(1)
                @php
                    $status = 'فعال';
                    $status_class = 'bg-success';
                @endphp
                @break
            @default
        @endswitch
        <tr>
            <td>{{$comment->id}}</td>
            <td>{{$comment->user->name}}</td>
            <td>{{$comment->product->name}}</td>
            <td>{{cut_text($comment->description, 0, 20)}}</td>
            <td>
                <div class="center-center">
                    {{-- <a href="{{route('comments.changeRole', $comment->id)}}" class="badge {{$role_class}} mx-1">{{$role}}</a> --}}
                    <a href="" onclick="alert('{{$comment->description}}'); return false;" class="badge bg-warning mx-1">مشاهده</a>
                    <a href="{{route('comments.changeStatus', $comment->id)}}" class="badge {{$status_class}} mx-1">{{$status}}</a>
                    <form action="{{route('comments.destroy', $comment->id)}}" method="post">
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
    {{ $comments->links("pagination::bootstrap-4") }}
</div>
@endsection
