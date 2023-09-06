@extends('master')

@section('content')


<div class="product-introduction">
    <div class="product-introduction-data">
		<div id="slider">
			<div class="pre-slider">
				<a href="#" class="prev">&#10094</a>
				<div class="slide">
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
		</div>

		<div class="product-data">
            <ul>
                <li class="header">
                    <h5><b>مشخصات محصول</b></h5>
                        <figure class="star">
                            @if ($favorites)
                            <a href="" id="favorite"><img src="{{ asset('icons/heart-red.gif') }}" alt="" id="heart"></a>                               
                            @else
                                <a href="" id="favorite"><img src="{{ asset('icons/heart-black.svg') }}" alt="" id="heart"></a>                             
                            @endif
                        </figure>
                </li>
                <li class="mix">
                    <h6><b>نام محصول:</b></h6>
                    <span class="normal">{{$product->name}}</span>
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
                    <span class="number">{{$product->weight}} گرم</span>
                </li>
                <li class="mix">
                    <h6><b>قیمت محصول</b></h6>
                    <span class="number">{{$product->price}} تومان</span>
                </li>
                <li class="text">
                    <p class="warranty">این محصول تا {{$product->warranty}} ماه پس از خرید گارانتی دارد</p>
                </li>
                <li class="text">
                    <a href="#observ" class="observ">مشاهده جزئیات کامل این مصحول</a>
                </li>
            </ul>
            <hr>
            <span class="score">شما به این محصول چه امتیازی می‌دهید؟!</span>
            <figure class="star-o">
                <img src="{{ asset('icons/star-o.gif') }}" alt="">
                <img src="{{ asset('icons/star-o.gif') }}" alt="">
                <img src="{{ asset('icons/star-o.gif') }}" alt="">
                <img src="{{ asset('icons/star-o.gif') }}" alt="">
                <img src="{{ asset('icons/star-o.gif') }}" alt="">
            </figure>
		</div>
    </div>
    <button class="add"><div class="add-content"><span>افزودن به سبد خرید</span><img src="{{ asset('icons/plus.gif') }}" alt=""></div></button>
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
                                <span class="price">20,400,000</span>
                                <span class="price-offer">14,280,000</span>
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
                                <span class="price">20,400,000</span>
                                <span class="price-offer">14,280,000</span>
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
                                <span class="price">20,400,000</span>
                                <span class="price-offer">14,280,000</span>
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
                                <span class="price">20,400,000</span>
                                <span class="price-offer">14,280,000</span>
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
                                <span class="price">20,400,000</span>
                                <span class="price-offer">14,280,000</span>
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
                                <span class="price">20,400,000</span>
                                <span class="price-offer">14,280,000</span>
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
            {!!$product->description!!}
        </div>
        <div id="details" class="product-content-item">
            details
        </div>
        <div id="comments" class="product-content-item">
            <div class="comments-box">
                @if ($number_of_comments != 0)
                    <span class="number-of-comments">برای  این محصول {{$number_of_comments}} دیدگاه  ثبت شده است</span>
                @else
                    <span class="number-of-comments">تا به حال نظری برای این محصول ثبت نشده است</span>
                @endif
                <div id="add-comment">
                    @auth
                        <div id="none">
                            <span class="add-comment">برای نظر دادن به این  محصول کلیک کنید</span>
                            <a href="" class="add-comment" id="add-comment-a">ثبت نظر</a>
                        </div>
                        <form method="POST" id="add-comment-form" action="{{route('user.comments.store', $product->id)}}">
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
                                    <span class="username">{{$comment->user->name}}</span>
                                </div>
                                <div class="left">
                                    <span class="date">ارسال شده در {{jdate($comment->created_at)}}</span>
                                </div>
                            </div>
                            <hr>
                            <div class="middle-section">
                                <p>{{$comment->description}}</p>
                            </div>
                            <div class="bottom-section">
                                <div class="right">
                                    <a href="">
                                        <img src="{{ asset('icons/reply.gif') }}" alt="" class="reply">
                                        <span>پاسخ</span>
                                    </a>
                                </div>
                                <div class="left">
                                    <a href="{{route('user.comments.dislike', $comment->id)}}" class="right-link">
                                        <img src="{{ asset('icons/dis-like.gif') }}" alt="" class="dis-like">
                                        <span>{{$comment->dislike}}</span>
                                    </a>
                                    <a href="{{route('user.comments.like', $comment->id)}}" class="left-link">
                                        <img src="{{ asset('icons/like.gif') }}" alt="" class="like">
                                        <span>{{$comment->like}}</span>
                                    </a>
                                </div>
                            </div>
                        </article>
                    @endforeach
            {{ $comments->fragment('about')->links("pagination::bootstrap-4") }}

                </section>
            </div>
        </div>
    </div>
</div>

@endsection
