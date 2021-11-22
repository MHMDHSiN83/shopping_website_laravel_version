<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>پنل مدیریت</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/admin-style.css') }}">
</head>
<body>
<div id="main">
    <h1 class="title"> مدیریت</h1>
    <div class="sidebar">
        <ul>
            <li><a href="{{route('products.index')}}">لیست محصولات</a></li>
            <li><a href="{{route('products.create')}}">افزودن محصول</a></li>
            <li><a href="{{route('users.index')}}">لیست کاربران</a></li>
            <li><a href="{{route('categories.index')}}">دسته‌بندی‌ها</a></li>
            <li><a href="{{route('comments.index')}}">نظرات</a></li>
            <li><a href="orders.php">سفارشات</a></li>
            <li><a href="">خروج</a></li>
        </ul>
    </div>
    <div class="content">
        @yield('content')
    </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="https://cdn.tiny.cloud/1/rsom1y1g6y1j9hw1ev0yeixaj4dv7ldqcwy193f679fxvaas/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{ asset('js/admin-script.js') }}"></script>
<script>
    {!! \File::get(base_path('vendor/unisharp/laravel-filemanager/public/js/stand-alone-button.js')) !!};
    var route_prefix = "/filemanager";
    $('#lfm').filemanager('image', {prefix: route_prefix});
</script>

</html>
