@extends('master')

@section('content')
    <div class="product-introduction">
        <div class="product-introduction-data">
            {{-- <div id="slider">
                <div class="pre-slider" style="width: 500px; height: 333px;">
                    <a href="#" class="prev">&#10094</a>
                    <div class="slides">
                        <div class="images">
                            <img src="{{ asset('images/slideshow1.png') }}" alt="" class="slide-image">
                            <img src="{{ asset('images/slideshow2.png') }}" alt="" class="slide-image">
                            <img src="{{ asset('images/slideshow3.png') }}" alt="" class="slide-image">
                            <img src="{{ asset('images/slideshow2.png') }}" alt="" class="slide-image">
                        </div>
                    </div>
                    <a href="#" class="next">&#10095</a>
                </div>

                <div id="dots">
                    <span class="dot active"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div> --}}
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-touch="false" style="width: 28%">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active"aria-current="true"></button>
                </div>
                <div class="carousel-inner">
                    @foreach (explode(',', $product->images) as $key => $image)
                        <div class="carousel-item @if ($key == 0) {{ 'active' }} @endif">
                            <img src="{{ $image }}" class="d-block w-100 h-100 object-fit-cover">
                        </div>
                    @endforeach
                    <div class="carousel-item">
                        <img src="{{ asset('images/slideshow1.png') }}" class="d-block w-100 h-100 object-fit-cover">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slideshow2.png') }}" class="d-block w-100 h-100 object-fit-cover">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/slideshow3.png') }}" class="d-block w-100 h-100 object-fit-cover">
                    </div>
                </div>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <div class="product-data">
                <ul>
                    <li class="header">
                        <h5><b>مشخصات محصول</b></h5>
                        <figure class="star">
                            @if ($favorites)
                                <a href="" id="favorite"><img src="{{ asset('icons/heart-red.gif') }}"
                                        alt="" id="heart" onclick="set_favorite({{ $product->id }});"></a>
                            @else
                                <a href="" id="favorite"><img src="{{ asset('icons/heart-black.svg') }}"
                                        alt="" id="heart" onclick="set_favorite({{ $product->id }});"></a>
                            @endif
                        </figure>
                    </li>
                    <li class="mix">
                        <h6><b>نام محصول:</b></h6>
                        <span class="normal">{{ $product->name }}</span>
                    </li>
                    <li class="mix">
                        <h6><b>رنگ محصول:</b></h6>
                        <figure class="colors">
                            <img src="{{ asset('icons/red.gif') }}" alt="">
                            <img src="{{ asset('icons/blue.gif') }}" alt="">
                            <img src="{{ asset('icons/black.gif') }}" alt="">
                            <img src="{{ asset('icons/white.gif') }}" alt="">
                            <img src="{{ asset('icons/green.gif') }}" alt="">
                        </figure>
                    </li>
                    <li class="mix">
                        <h6><b>وزن محصول:</b></h6>
                        <span class="number">{{ toPersian($product->weight) }} گرم</span>
                    </li>
                    <li class="mix">
                        <h6><b>قیمت محصول</b></h6>
                        <span class="number">{{ toPersian($product->price) }} تومان</span>
                    </li>
                    <li class="text">
                        <p class="warranty">این محصول تا {{ toPersian($product->warranty) }} ماه پس از خرید گارانتی دارد
                        </p>
                    </li>
                    <li class="text">
                        <a href="#observ" class="observ">مشاهده جزئیات کامل این مصحول</a>
                    </li>
                </ul>
                <hr>
                <span class="score">شما به این محصول چه امتیازی می‌دهید؟!</span>
                <figure class="star-o">
                    <i class="5 rating-stars fa-regular fa-star fa-lg" style="color: #efdf03;"
                        onclick="rating_product(5, {{ $product->id }})"></i>
                    <i class="4 rating-stars fa-regular fa-star fa-lg" style="color: #efdf03;"
                        onclick="rating_product(4, {{ $product->id }})"></i>
                    <i class="3 rating-stars fa-regular fa-star fa-lg" style="color: #efdf03;"
                        onclick="rating_product(3, {{ $product->id }})"></i>
                    <i class="2 rating-stars fa-regular fa-star fa-lg" style="color: #efdf03;"
                        onclick="rating_product(2, {{ $product->id }})"></i>
                    <i class="1 rating-stars fa-regular fa-star fa-lg" style="color: #efdf03;"
                        onclick="rating_product(1, {{ $product->id }})"></i>
                    @if ($rate)
                        <script>
                            set_rate({{ $rate->rate }});
                        </script>
                    @else
                        <script>
                            set_rate(0);
                        </script>
                    @endif
                    <span style="color: #efdf03;">{{toPersian($rates_average)}}</span>
                    <span class="me-md-1" style="color: #efdf03;">{{toPersian($number_of_rates)}}رای</span>
                </figure>
            </div>
        </div>
        <button class="add">
            <div class="add-content"><span>افزودن به سبد خرید</span><img src="{{ asset('icons/plus.gif') }}"
                    alt=""></div>
        </button>
    </div>
    <section class="product-slider">
        <div class="visibility-product">
            <a href="#" class="prev-product">&#10094</a>
            <div class="pre-article">
                <div class="slide-product">
                    <article class="product-article">
                        <a href="product.html">
                            <figure>
                                <img src="{{ asset('images/sample2.jpg') }}" alt="">
                            </figure>
                            <figcaption>لپ تاپ لنوو مدل گیمینگ تری</figcaption>
                            <div class="preview">
                                لورم ایپسوم متن ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ

                            </div>
                            <div class="product-price">
                                <div class="prices">
                                    <span class="price">۲۰,۴۰۰,۰۰۰</span>
                                    <span class="price-offer">۱۴,۲۸۰,۰۰۰</span>
                                </div>
                                <span class="toman">تومان</span>
                                <img src="{{ asset('icons/money.svg') }}" alt="">

                            </div>
                        </a>
                        <a href="#">
                            <div class="product-button">
                                <img src="{{ asset('icons/shopping-cart-blue.gif') }}">
                                <span>افزودن سبد خرید</span>
                            </div>
                        </a>
                    </article>
                    <article class="product-article">
                        <a href="product.html">
                            <figure>
                                <img src="{{ asset('images/sample2.jpg') }}" alt="">
                            </figure>
                            <figcaption>لپ تاپ لنوو مدل گیمینگ تری</figcaption>
                            <div class="preview">
                                لورم ایپسوم متن ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ

                            </div>
                            <div class="product-price">
                                <div class="prices">
                                    <span class="price">۲۰,۴۰۰,۰۰۰</span>
                                    <span class="price-offer">۱۴,۲۸۰,۰۰۰</span>
                                </div>
                                <span class="toman">تومان</span>
                                <img src="{{ asset('icons/money.svg') }}" alt="">

                            </div>
                        </a>
                        <a href="#">
                            <div class="product-button">
                                <img src="{{ asset('icons/shopping-cart-blue.gif') }}">
                                <span>افزودن سبد خرید</span>
                            </div>
                        </a>
                    </article>
                    <article class="product-article">
                        <a href="product.html">
                            <figure>
                                <img src="{{ asset('images/sample2.jpg') }}" alt="">
                            </figure>
                            <figcaption>لپ تاپ لنوو مدل گیمینگ تری</figcaption>
                            <div class="preview">
                                لورم ایپسوم متن ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ

                            </div>
                            <div class="product-price">
                                <div class="prices">
                                    <span class="price">۲۰,۴۰۰,۰۰۰</span>
                                    <span class="price-offer">۱۴,۲۸۰,۰۰۰</span>
                                </div>
                                <span class="toman">تومان</span>
                                <img src="{{ asset('icons/money.svg') }}" alt="">

                            </div>
                        </a>
                        <a href="#">
                            <div class="product-button">
                                <img src="{{ asset('icons/shopping-cart-blue.gif') }}">
                                <span>افزودن سبد خرید</span>
                            </div>
                        </a>
                    </article>
                    <article class="product-article">
                        <a href="product.html">
                            <figure>
                                <img src="{{ asset('images/sample2.jpg') }}" alt="">
                            </figure>
                            <figcaption>لپ تاپ لنوو مدل گیمینگ تری</figcaption>
                            <div class="preview">
                                لورم ایپسوم متن ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ

                            </div>
                            <div class="product-price">
                                <div class="prices">
                                    <span class="price">۲۰,۴۰۰,۰۰۰</span>
                                    <span class="price-offer">۱۴,۲۸۰,۰۰۰</span>
                                </div>
                                <span class="toman">تومان</span>
                                <img src="{{ asset('icons/money.svg') }}" alt="">

                            </div>
                        </a>
                        <a href="#">
                            <div class="product-button">
                                <img src="{{ asset('icons/shopping-cart-blue.gif') }}">
                                <span>افزودن سبد خرید</span>
                            </div>
                        </a>
                    </article>
                    <article class="product-article">
                        <a href="product.html">
                            <figure>
                                <img src="{{ asset('images/sample2.jpg') }}" alt="">
                            </figure>
                            <figcaption>لپ تاپ لنوو مدل گیمینگ تری</figcaption>
                            <div class="preview">
                                لورم ایپسوم متن ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ

                            </div>
                            <div class="product-price">
                                <div class="prices">
                                    <span class="price">۲۰,۴۰۰,۰۰۰</span>
                                    <span class="price-offer">۱۴,۲۸۰,۰۰۰</span>
                                </div>
                                <span class="toman">تومان</span>
                                <img src="{{ asset('icons/money.svg') }}" alt="">

                            </div>
                        </a>
                        <a href="#">
                            <div class="product-button">
                                <img src="{{ asset('icons/shopping-cart-blue.gif') }}">
                                <span>افزودن سبد خرید</span>
                            </div>
                        </a>
                    </article>
                    <article class="product-article">
                        <a href="product.html">
                            <figure>
                                <img src="{{ asset('images/sample2.jpg') }}" alt="">
                            </figure>
                            <figcaption>لپ تاپ لنوو مدل گیمینگ تری</figcaption>
                            <div class="preview">
                                لورم ایپسوم متن ساختگی با تولید
                                سادگی نامفهوم از صنعت چاپ

                            </div>
                            <div class="product-price">
                                <div class="prices">
                                    <span class="price">۲۰,۴۰۰,۰۰۰</span>
                                    <span class="price-offer">۱۴,۲۸۰,۰۰۰</span>
                                </div>
                                <span class="toman">تومان</span>
                                <img src="{{ asset('icons/money.svg') }}" alt="">

                            </div>
                        </a>
                        <a href="#">
                            <div class="product-button">
                                <img src="{{ asset('icons/shopping-cart-blue.gif') }}">
                                <span>افزودن سبد خرید</span>
                            </div>
                        </a>
                    </article>
                </div>
            </div>
            <a href="#" class="next-product">&#10095</a>
        </div>
    </section>
    <div class="product-info" id="observ">
        <div class="product-nav">
            <span onclick="show(this, 'about')" class="product-nav-item">درباره محصول</span>
            <span onclick="show(this, 'details')" class="product-nav-item">مشخصات</span>
            <span onclick="show(this, 'comments')" class="product-nav-item">نظرات</span>
        </div>
        <div class="product-content">
            <div id="about" class="product-content-item">
                {!! $product->description !!}
            </div>
            <div id="details" class="product-content-item">
                details
            </div>
            <div id="comments" class="product-content-item">
                <div class="comments-box">
                    @if ($number_of_comments != 0)
                        <span class="number-of-comments">برای این محصول {{ toPersian($number_of_comments) }} دیدگاه ثبت
                            شده است</span>
                    @else
                        <span class="number-of-comments">تا به حال نظری برای این محصول ثبت نشده است</span>
                    @endif
                    <div id="add-comment">
                        @auth
                            <div id="none">
                                <span class="add-comment">برای نظر دادن به این محصول کلیک کنید</span>
                                <a href="" class="add-comment" id="add-comment-a">ثبت نظر</a>
                            </div>
                            <form method="POST" id="add-comment-form"
                                action="{{ route('user.comments.store', $product->id) }}">
                                @csrf
                                <textarea name="description"></textarea>
                                <br>
                                <input type="submit" value="افزودن نظر">
                            </form>
                        @else
                            <div id="none">
                                <span class="add-comment">برای نظر دادن ابتدا وارد سایت شوید</span>
                            </div>
                        @endauth
                    </div>

                    <section class="comments">
                        @foreach ($comments as $comment)
                            <article class="comment">
                                <div class="top-section">
                                    <div class="right">
                                        <span class="profile-image"></span>
                                        <span class="username">{{ $comment->user->name }}</span>
                                    </div>
                                    <div class="left">
                                        <span class="date">ارسال شده در
                                            {{ \Morilog\Jalali\CalendarUtils::convertNumbers(jdate($comment->created_at)->format('%d-%m-%Y')) }}</span>
                                    </div>
                                </div>
                                <hr>
                                <div class="middle-section">
                                    <p>{{ $comment->description }}</p>
                                </div>
                                <div class="bottom-section">
                                    <div class="right">
                                        <a href="">
                                            <img src="{{ asset('icons/reply.gif') }}" alt="" class="reply">
                                            <span>پاسخ</span>
                                        </a>
                                    </div>
                                    <div class="left">
                                        <a href="" class="right-link" id="dislike-click"
                                            onclick="like_comment(this, 'next', {{ $comment->id }});">
                                            @if ($comment->likeCondition(get_user_id_if_exist()) == 'dislike')
                                                <i class="fa-solid fa-thumbs-down fa-flip-horizontal fa-xl"
                                                    style="color: #f7706b;" id="dislike-icon"></i>
                                            @else
                                                <i class="fa-regular fa-thumbs-down fa-flip-horizontal fa-xl"
                                                    style="color: #f7706b;" id="dislike-icon"></i>
                                            @endif
                                            <span>{{ toPersian($comment->dislike) }}</span>
                                        </a>
                                        <a href="" class="left-link" id="like-click"
                                            onclick="like_comment(this, 'previous', {{ $comment->id }});">
                                            @if ($comment->likeCondition(get_user_id_if_exist()) == 'like')
                                                <i class="fa-solid fa-thumbs-down fa-flip-vertical fa-xl"
                                                    style="color: #37a274;" id="like-icon"></i>
                                            @else
                                                <i class="fa-regular fa-thumbs-down fa-flip-vertical fa-xl"
                                                    style="color: #37a274;" id="like-icon"></i>
                                            @endif
                                            <span>{{ toPersian($comment->like) }}</span>
                                        </a>
                                    </div>
                                </div>
                            </article>
                        @endforeach
                        {{ $comments->fragment('about')->links('pagination::bootstrap-4') }}

                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
