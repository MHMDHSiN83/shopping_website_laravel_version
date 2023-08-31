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
    product_content.style.display = 'flex';
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
if(favorite) {
favorite.addEventListener('click', function(e) {
    e.preventDefault();
    if(is_login == true) {
        if(heart.src == 'http://localhost/shopping_website/icons/heart-red.gif') {
            heart.src = 'icons/heart-black.svg';
            $.ajax({
                method: "POST",
                url: "actions.php",
                data: { favorite: 'false' }
            })
        } else {
            heart.src = 'icons/heart-red.gif';
            $.ajax({
                method: "POST",
                url: "actions.php",
                data: { favorite: 'true' }
            })
        }
    } else {
        alert('ابتدا لاگین کنید');
    }
});


let add_comment_a = document.getElementById('add-comment-a');
let add_comment_form = document.getElementById('add-comment-form');
let none = document.getElementById('none');
add_comment_a.addEventListener('click', function(e) {
    e.preventDefault();
    add_comment_form.style.display = "block";
    none.style.display = "none";
});
}
