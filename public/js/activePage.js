const navLinks = document.querySelectorAll('.nav-link').forEach(link => {

    if (link.href.replace(/\.[^/.]+$/, "") === window.location.href.replace(/\.[^/.]+$/, "")) {
        link.setAttribute('aria-current', 'page');
    };
});