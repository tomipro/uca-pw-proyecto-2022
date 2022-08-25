window.addEventListener("scroll", function () {
    var navbar = this.document.querySelector("nav");
    navbar.classList.toggle("sticky", window.scrollY > 50);
});

const imgArr = [];