@extends('admin.index')
@section('content')

@include('layouts.messages')

<table class="table">
    <tr>
        <th>شناسه</th>
        <th>نام کاربر</th>
        <th>ایمیل کاربر</th>
        <th>مدیریت کاربر</th>
    </tr>
    @foreach ($users as $user)
        @switch($user->role)
            @case(1)
                @php
                    $role = 'مدیر';
                    $role_class = 'bg-primary';
                @endphp
                @break
            @case(2)
                @php
                    $role = 'کاربر';
                    $role_class = 'bg-warning';
                @endphp
                @break
            @default
        @endswitch
        @switch($user->status)
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
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <div class="center-center">
                    <a href="{{route('users.changeRole', $user->id)}}" class="badge {{$role_class}} mx-1">{{$role}}</a>
                    <a href="{{route('users.changeStatus', $user->id)}}" class="badge {{$status_class}} mx-1">{{$status}}</a>
                    <form action="{{route('users.destroy', $user->id)}}" method="post">
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
    {{ $users->links("pagination::bootstrap-4") }}
</div>
@endsection
