const URL = "http://localhost:8000/";

function scrollFunction() {
    if (document.body.scrollTop > 60 || document.documentElement.scrollTop > 60) {
          document.getElementsByTagName("nav")[0].style.boxShadow = "0 3px 6px rgba(0, 0, 0, 0.712)";
    } else {
        document.getElementsByTagName("nav")[0].style.boxShadow = "none";
    }
}
window.onscroll = function() {scrollFunction()};

let images = document.querySelector('.images');
let number_of_image = document.getElementsByClassName('slide-image');
let dot = document.getElementsByClassName('dot');
let prev = document.querySelector('.prev');
let next = document.querySelector('.next');
let n = 0;

function remove_active() {
    for(let i = 0; i < dot.length; i++) {
        dot[i].classList.remove('active');
    }
}

if(next) {
next.addEventListener('click', function(e) {
    e.preventDefault();
    if (n == number_of_image.length-1) {
        // n = 0;
        return;
    }
    n++;

    remove_active();
    images.style.transform = "translateX(" + 500*n + "px)";
    dot[n].classList.add('active');

});

prev.addEventListener('click', function(e) {
    e.preventDefault();
    if (n == 0) {
        // n = number_of_image.length - 1;
        return;
    }
    n--;

    remove_active();
    images.style.transform = "translateX(" + 500*n + "px)";
    dot[n].classList.add('active');

});
}
let next_product = document.querySelector('.next-product');
let prev_product = document.querySelector('.prev-product');
let slide_product = document.querySelector('.slide-product');
let product_article = document.getElementsByClassName('product-article');
let m = 0;
if(next_product) {
next_product.addEventListener('click', function(e) {
    e.preventDefault();
    if(m >= 0) {
        prev_product.style.opacity = '1';
        prev_product.style.cursor = 'pointer';
    }
    if(m == product_article.length - 5) {
        next_product.style.opacity = '0.5';
        next_product.style.cursor = 'auto';
    }
    if(m == product_article.length - 4) {
        return;
    }

    m++;
    slide_product.style.transform = "translateX(" + 283*m + "px)";
});

prev_product.addEventListener('click', function(e) {
    e.preventDefault();
    if(m <= product_article.length - 4) {
        next_product.style.opacity = '1';
        next_product.style.cursor = 'pointer';

    }
    if(m == 1) {
        prev_product.style.opacity = '0.5';
        prev_product.style.cursor = 'auto';

    }
    if(m == 0) {
        return;
    }
    m--;
    slide_product.style.transform = "translateX(" + 283*m + "px)";
});

}
let about = document.getElementById('about');
let details = document.getElementById('details');
let comments = document.getElementById('comments');
function show(this_element, element_id)
{
    unify();
    this_element.style.backgroundColor = '#F8F7F7';
    let product_content = document.getElementById(element_id);
    product_content.style.display = 'block';
}
function unify()
{
    let product_nav = document.getElementsByClassName('product-nav-item');
    let product_content = document.getElementsByClassName('product-content-item');
    for (let i = 0; i < product_nav.length; i++) {
        product_nav[i].style.backgroundColor = '#E1E1E1';
    }
    for (let i = 0; i < product_content.length; i++) {
        product_content[i].style.display = 'none';
    }
}


let actual_width = document.body.scrollWidth;
let percent = 0.42;
let hero_section_height = actual_width * percent;
let hero_section = document.getElementById('hero-section');
if(hero_section) {
    hero_section.style.height = hero_section_height + 'px';
}

let favorite = document.getElementById('favorite');
let heart = document.getElementById('heart');
let is_log = document.getElementById('is-log');

if(favorite) {
    favorite.addEventListener('click', function(e) {
        e.preventDefault();
        if(is_log) {
            let currentUrl = window.location.href;
            let split_url = currentUrl.split('/');
            let product_id = split_url[split_url.length - 1];
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            if(heart.src == URL + 'icons/heart-red.gif') {
                heart.src = URL + 'icons/heart-black.svg';
                $.ajax({      
                    type: "POST",
                    url: "/deletefavorite",
                    data: {product_id},
                    dataType: "json",
                })
            } else {
                heart.src = URL + 'icons/heart-red.gif';
                $.ajax({      
                    type: "POST",
                    url: "/setfavorite",
                    data: {product_id},
                    dataType: "json",
                })
            }
        } else {      
            swal({
                title: "ابتدا وارد سایت شوید",
                icon: "info",
                button: "باشه",
            });
            
            let sweetAlert = document.getElementsByClassName('swal-button');
            sweetAlert[0].addEventListener('mouseenter', function(e) {
                sweetAlert[0].style.backgroundColor = '#3e549a';
            });
            sweetAlert[0].addEventListener('mouseleave', function(e) {
                sweetAlert[0].style.backgroundColor = '#4962B3';
            });
        }
    });

    let add_comment_a = document.getElementById('add-comment-a');
    let add_comment_form = document.getElementById('add-comment-form');
    let none = document.getElementById('none');
    if(add_comment_a) {
        add_comment_a.addEventListener('click', function(e) {
            e.preventDefault();
            add_comment_form.style.display = "block";
            none.style.display = "none";
        });
    }
}

function like_comment(this_element, position, comment_id)
{
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    let status = "";
    let icon = this_element.getElementsByTagName('i')[0];
    let number = this_element.getElementsByTagName('span')[0];
    if(icon.classList.contains('fa-solid')) {
        icon.classList.remove('fa-solid');
        icon.classList.add('fa-regular');
        number.innerHTML = parseInt(number.innerHTML) - 1;
        status = "delete";
    } else {
        if(position == 'next') {
            var other_element = this_element.nextElementSibling;
        } else {
            var other_element = this_element.previousElementSibling;
        }
        let other_icon = other_element.getElementsByTagName('i')[0];
        let other_number = other_element.getElementsByTagName('span')[0];
        icon.classList.remove('fa-regular');
        icon.classList.add('fa-solid');
        if(other_icon.classList.contains('fa-solid')) {
            other_icon.classList.remove('fa-solid');
            other_icon.classList.add('fa-regular');
            other_number.innerHTML = parseInt(other_number.innerHTML) - 1;
            status = "both";
        } else {
            status = "create";
        }
        number.innerHTML = parseInt(number.innerHTML) + 1;
    }
    $.ajax({      
        type: "POST",
        url: "/likeordislikecomment",
        data: {comment_id, position, status},
        dataType: "json",
        error: function(err){
            console.log(err);
        }
    })
    event.preventDefault();
}