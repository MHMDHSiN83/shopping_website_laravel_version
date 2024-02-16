<div class="row bg-gray-color w-100 pb-5">
    <div class="col-md-2 text-center bg-white pt-md-5 ps-0 rounded">
        <div>
            <figure class="figure mb-md-2">
                <div class="circle-image mb-md-3">
                    <img src="../images/sajad.hada.jpg" class="figure-img rounded-circle w-100 h-100 object-fit-cover">
                </div>
                <figcaption class="h6"><strong>{{Auth::user()->name}}</strong></figcaption>
            </figure>
        </div>
        <ul class="list-unstyled list-group mt-md-2 profile-list rounded-0 rounded-bottom">
            <li class="list-group-item border-0 py-md-2">
                <a href="" class=" d-flex flex-row align-items-center w-100 m-0 text-decoration-none text-black">
                    <i class="fa-solid fa-user fa-lg" style="color: #6B9AF7;"></i>
                    <span>اطلاعات کاربری</span>
                </a>
            <li class="list-group-item border-0 py-md-2">
                <a href="{{route('user.profile.basket')}}" class=" d-flex flex-row align-items-center w-100 m-0 text-decoration-none text-black">
                    <i class="fa-solid fa-cart-shopping fa-lg" style="color: #6B9AF7;"></i>
                    <span>سبد خرید</span>
                </a>
            </li>
            <li class="list-group-item border-0 py-md-2">
                <a href="" class=" d-flex flex-row align-items-center w-100 m-0 text-decoration-none text-black">
                    <i class="fa-solid fa-heart fa-lg" style="color: #6B9AF7;"></i>
                    <span>علاقه مندی ها</span>
                </a>
            </li>
            <li class="list-group-item border-0 py-md-2">
                <a href="" class=" d-flex flex-row align-items-center w-100 m-0 text-decoration-none text-black">
                    <i class="fa-solid fa-comment-dots fa-lg" style="color: #6B9AF7;"></i>
                    <span>نظرات من</span>
                </a>
            </li>
            <li class="list-group-item border-0 py-md-2">
                <a href="" class=" d-flex flex-row align-items-center w-100 m-0 text-decoration-none text-black">
                    <i class="fa-solid fa-file-invoice fa-lg" style="color: #6B9AF7;"></i>
                    <span>سفارش های من</span>
                </a>
            </li>
            <li class="list-group-item border-0 py-md-2">
                <a href="" class=" d-flex flex-row align-items-center w-100 m-0 text-decoration-none text-black">
                    <i class="fa-solid fa-gear fa-lg" style="color: #6B9AF7;"></i>
                    <span>تنظیمات</span>
                </a>
            </li>
            <li class="list-group-item border-0 py-md-2">
                <a href="" class=" d-flex flex-row align-items-center w-100 m-0 text-decoration-none text-black">
                    <i class="fa-solid fa-right-to-bracket fa-lg" style="color: #6B9AF7;"></i>
                    <span>خروج</span>
                </a>
            </li>
        </ul>
    </div>