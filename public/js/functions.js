function set_rate(rate)
{
    let stars = document.getElementsByClassName('rating-stars');
    for (let i = 0; i < 5; i++) {
        if(parseInt(stars[i].classList[0]) <= rate) {
            stars[i].classList.remove('fa-regular');
            stars[i].classList.add('fa-solid');
        } else if (stars[i].classList.contains('fa-solid')) {
            stars[i].classList.remove('fa-solid');
            stars[i].classList.add('fa-regular');
        }
    } 
}