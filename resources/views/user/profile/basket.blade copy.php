@extends('user.profile.master')


@section('content')
        <div class="row col-md-10 justify-content-around">
            <section class="carts col-md-7 p-0 me-md-3">
                <article class="cart-item my-5">
                    <div class="image">
                        <img src="../images/sample2.jpg" class="w-100 h-100 object-fit-cover rounded-end">
                    </div>
                    <div class="data pb-md-3">
                        <div class="top-section">
                            <p>گوشی اپل 2018 دو سیم کارت و عالی</p>
                            <div class="delete-product">
                                <a href="">
                                    <img src="../icons/rubbish-bin.gif" alt="">
                                    <span>حذف</span>
                                </a>
                            </div>
                        </div>
                        <div class="middle-section">
                            <div class="middle-section-item">
                                <img src="../icons/color.svg" alt="" class="data-icon">
                                <span class="data-text">رنگ : نقره ای</span>
                            </div>
                            <div class="middle-section-item">
                                <img src="../icons/security.svg" alt="" class="data-icon">
                                <span class="data-text">گارانتی : سام سرویس</span>
                            </div>
                            <div class="middle-section-item">
                                <img src="../icons/truck.svg" alt="" class="data-icon">
                                <span class="data-text">حمل و نقل : اداره پست</span>
                            </div>
                            <div class="middle-bottom-section-item">
                                <div class="middle-section-item">
                                    <img src="../icons/shop.svg" alt="" class="data-icon">
                                    <span class="data-text">فروشگاه : دیجیکالا</span>
                                </div>
                                <div class="offer">
                                    <span>50%</span>
                                    <img src="../icons/discount.gif" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="bottom-section">
                            <div class="number-of-product">
                                <img src="../icons/add.gif" alt="">
                                <span>1</span>
                                <img src="../icons/minus.gif" alt="">
                            </div>
                            <div class="price">
                                <span class="number-of-price">12,000,000</span>
                                <span class="toman">تومان</span>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
            <div class="col-md-3 d-flex align-items-center flex-column">
                <div class="w-50">
                    <svg height="100" class="w-100">
                        <line class="custom-shadow" x1="50%" y1="0" x2="50%" y2="100"
                            id="hanging-line"/>
                    </svg>
                </div>
                <div class="w-50 lh-0">
                    <svg class="w-100" height="20">
                        <circle cx="50%" cy="20" r="20" fill="white" class="custom-shadow" />
                    </svg>
                </div>
                <div class="w-100 bg-white custom-shadow rounded">
                    <div class="container px-md-4 font-size-14">
                        <div class="d-flex justify-content-between my-md-3">
                            <span>تعداد کالاها:</span>
                            <span>۳</span>
                        </div>
                        <div class="d-flex justify-content-between my-md-3">
                            <span>قیمت کالاها:</span>
                            <span>۱۲۰۰۰۰۰ تومان</span>
                        </div>
                        <div class="d-flex justify-content-between my-md-3">
                            <span>تخفیف کالاها:</span>
                            <span class="text-danger">(۱۳٪) ۱۲۰۰۰۰۰ تومان</span>
                        </div>
                        <hr class="my-mb-3 border-2 opacity-50">
                        <div class="d-flex justify-content-between my-md-3">
                            <span><strong>قیمت نهایی:</strong></span>
                            <span><strong>۱۲۰۰۰۰۰ تومان</strong></span>
                        </div>
                        <div class="font-size-11 text-center">
                            این قیمت بدون احتساب هزینه حمل و نقل است.
                        </div>
                        <div class="text-center">
                            <button class="w-100 my-md-4 btn-color-green border-0 rounded text-white py-md-2">ادامه فرایند خرید<i class="fa-solid fa-angle-left fa-lg align-middle me-md-2"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
