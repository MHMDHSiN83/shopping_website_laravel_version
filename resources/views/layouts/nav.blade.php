<nav class="sticky-top">
    <ul class="right-ul">
        <li><img src="{{ asset('icons/home.gif') }}" alt=""><a href=""><b></b>خانه</b></a></li>
        <li class="dropdown">
            <img src="{{ asset('icons/list.gif') }}" alt=""><a href="#">دسته بندی</a>
            <div class="cat-dropdown">
                <ul class="cat">
                    <li><img src="{{ asset('icons/angle-double-left.gif') }}" alt=""><span>کامپیوتر</span></li>
                    <li><img src="{{ asset('icons/angle-double-left.gif') }}" alt=""><span>لپ تاپ</span></li>
                    <li><img src="{{ asset('icons/angle-double-left.gif') }}" alt=""><span>گوشی</span></li>
                    <li><img src="{{ asset('icons/angle-double-left.gif') }}" alt=""><span>کیبورد</span></li>
                    <li><img src="{{ asset('icons/angle-double-left.gif') }}" alt=""><span>موس</span></li>
                    <li><img src="{{ asset('icons/angle-double-left.gif') }}" alt=""><span>مانیتور</span></li>
                    <li><img src="{{ asset('icons/angle-double-left.gif') }}" alt=""><span>لوازم جانبی</span></li>
                </ul>
                <hr class="cat-dropdown-hr">
            </div>
        </li>
        <li><img src="{{ asset('icons/fire.gif') }}" alt=""><a href="#">پیشنهادات ویژه</a></li>
        <li><img src="{{ asset('icons/blog.gif') }}" alt=""><a href="#">بلاگ</a></li>
    </ul>
    <ul class="left-ul">
        <li class="li-icon">
            <a href="#"><img src="{{ asset('icons/profile-user.gif') }}" alt=""></a>
            <ul class="user-dropdown">
                <li><a href="#">حساب کاربری</a></li>
                <li><a href="">خروج</a></li>
                {{-- <?php if(isset($_SESSION['id'])) { ?>
                    <li><a href="#">حساب کاربری</a></li>
                    <li><a href="?logout=1">خروج</a></li>
                <?php } else { ?>
                    <li><a href="<?php echo PATH; ?>users/registry.php">ثبت نام</a></li>
                    <li><a href="<?php echo PATH; ?>users/login.php">ورود</a></li>
                <?php } ?> --}}
            </ul>
        </li>
        <li class="li-icon"><a href="#"><img src="{{ asset('icons/shopping-cart.gif') }}" alt=""></a></li>
    </ul>
</nav>
