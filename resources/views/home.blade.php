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