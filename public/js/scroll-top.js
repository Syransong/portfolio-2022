let btn = document.getElementById('scroll-top');
const footer = document.getElementById('footer');
const btnMarginBottom = parseInt(window.getComputedStyle(btn).getPropertyValue('bottom'));

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    btn.style.opacity = '1';

    } else {
        btn.style.opacity = '0';
    }
    
    const footStartPos = footer.getBoundingClientRect().y;

    if (window.innerHeight > footStartPos) {
        let pxAmt = (window.innerHeight - footStartPos) + btnMarginBottom;
        btn.style.bottom = pxAmt + 'px';

    } else {
        btn.style.bottom = '';
    }

}

function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}

btn.addEventListener("click", topFunction);