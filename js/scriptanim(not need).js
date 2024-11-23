window.addEventListener('scroll', function() {
    var header = document.getElementById('header');
    var scrollThreshold = window.innerHeight * 0.5; // 50% of the viewport height
    if (window.scrollY > scrollThreshold) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }
});



let text = document.getElementById('text');
let rocket = document.getElementById('rocket');
let bgimage = document.getElementById('bgimage');
let calender = document.getElementById('calender');
let car = document.getElementById('car');

window.addEventListener('scroll', () => {
    let value = window.scrollY;

    text.style.marginTop = value * 2.5 + 'px';
    rocket.style.top = value * -1.5 + 'px';
    rocket.style.left = value * 1.5 + 'px';
    car.style.left = value * 1.5 + 'px';
    calender.style.left = value * -1.5 + 'px';
    calender.style.top = value * -1.5 + 'px';
    // bgimage.style.top = value * 1 + 'px';
    bgimage.style.top = value * 0.5 + 'px';
});

