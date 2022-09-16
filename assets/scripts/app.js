window.addEventListener("scroll", function () {
    var navbar = this.document.querySelector("nav");
    navbar.classList.toggle("sticky", window.scrollY > 50);
});

var string = './assets/imgs/nft-art/10.jpeg';
string = string.substring(0, string.substring('/.'));

function getRandomInt(max) {
    return Math.floor(Math.random() * max);
}

var random = getRandomInt(19);

string += random + '.jpeg';

var image = document.getElementsById("galeria1");
image.src = string;

