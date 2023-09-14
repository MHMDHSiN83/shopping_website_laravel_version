<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>search-product</title>
</head>
<style>
html, body, div, span, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
abbr, address, cite, code,
del, dfn, em, img, ins, kbd, q, samp,
small, strong, sub, sup, var,
b, i,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, summary,
time, mark, audio, video {
    margin:0;
    padding:0;
    border:0;
    outline:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}

body {
    line-height:1;
}

article,aside,details,figcaption,figure,
footer,header,hgroup,menu,nav,section {
    display:block;
}

nav ul {
    list-style:none;
}

blockquote, q {
    quotes:none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content:'';
    content:none;
}

a {
    margin:0;
    padding:0;
    font-size:100%;
    vertical-align:baseline;
    background:transparent;
}


ins {
    background-color:#ff9;
    color:#000;
    text-decoration:none;
}

mark {
    background-color:#ff9;
    color:#000;
    font-style:italic;
    font-weight:bold;
}

del {
    text-decoration: line-through;
}

abbr[title], dfn[title] {
    border-bottom:1px dotted;
    cursor:help;
}

table {
    border-collapse:collapse;
    border-spacing:0;
}

hr {
    display:block;
    height:1px;
    border:0;
    border-top:1px solid #cccccc;
    margin:1em 0;
    padding:0;
}

input, select {
    vertical-align:middle;
}

@font-face {
    font-family: "Shabnam";
    src: url(Fonts/Shabnam.ttf);
}
* {
    font-family: 'Shabnam';
    direction: rtl;
}
.product {
    width: 80%;
    display: flex;
    justify-content: flex-start;
    flex-wrap: wrap;
    margin: 100px auto 0 auto;
}
.product .product-article {
    width: 27%;
    text-align: center;
    background-color: #f5f5f5;
    border-radius: 15px;
    font-size: 14px;
    box-shadow: 3px 4px 6px rgba(57, 55, 55, .35);
    cursor: pointer;
    margin: 32px;
}
.product .product-article a {
    text-decoration: none;
    color: black;
}
.product .product-article img{
    width: 85%;
}
.product .product-article figure{
    margin-top: 25px;
}
.product .product-article figcaption{
    width: 60%;
    margin: 15px auto;
    text-align: right;
}
.product .product-article .product-footer{
    width: 50%;
    margin: 15px 110px 20px 0;
}
.product .product-article .product-footer span{
    font-size: 16px;
}
.product .product-article .product-footer img{
    width: 8%;
}
</style>
<body>
    <section class="product">
        @foreach ($products as $product)
            <article class="product-article">
                <a href="{{route('user.product.show', $product->id)}}">
                    <figure>
                        <img src="{{set_images_path($product->images)[0]}}" alt="">
                    </figure>
                    <figcaption>{{$product->name}}</figcaption>
                    <footer class="product-footer">
                        <span>{{$product->price}}</span>
                        <img src="icons/money.svg" alt="">
                    </footer>
                </a>
            </article>
        @endforeach
    </section>
</body>
</html>
