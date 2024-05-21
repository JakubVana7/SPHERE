const searchBar = document.querySelector('.search-bar');
const navbar = document.querySelector('header');

const threshold = 50;

window.addEventListener('scroll', () => {
    if (window.scrollY > threshold) {
        searchBar.style.transform = 'translateY(-100%)';
        searchBar.style.transition = 'transform 0.5s ease-out';
    } else {
        searchBar.style.transform = 'translateY(0)';
        searchBar.style.transition = 'transform 0.5s ease-out';
    }
});

// where "container1" and "container2" are the ids of the containers
const container1 = document.getElementById("sizes");
const container2 = document.getElementById("slideshow");

function scrollHandler(e) {
    let scrollAmount;
    if (e.type === 'wheel') {
        scrollAmount = e.deltaY > 0 ? 100 : -100;
        e.preventDefault();
    } else if (e.type === 'touchmove') {
        scrollAmount = e.changedTouches[0].clientX > this.lastTouchPos ? 100 : -100;
        this.lastTouchPos = e.changedTouches[0].clientX;
        e.preventDefault();
    }
    this.scrollLeft += scrollAmount;
}

container1.addEventListener("wheel", scrollHandler);
container2.addEventListener("wheel", scrollHandler);
container1.addEventListener("touchmove", scrollHandler);
container2.addEventListener("touchmove", scrollHandler);


const checkoutButton = document.querySelector('.checkout-button');

checkoutButton.addEventListener('click', () => {
    // Validate form fields
    const name = document.querySelector('#name').value;
    const email = document.querySelector('#email').value;
    const message = document.querySelector('#message').value;
    const address = document.querySelector('#address').value;
    const city = document.querySelector('#city').value;

    if (!name || !email || !message || !address || !city) {
        alert('Please fill out all the fields.');
        return;
    }

    // Submit the order
    alert('Order submitted!');
});


//payment button colors


const paymentButtons = document.querySelectorAll('.payment-button');

paymentButtons.forEach((button) => {
    button.addEventListener('click', () => {
        paymentButtons.forEach((otherButton) => {
            otherButton.classList.remove('selected');
        });
        button.classList.add('selected');
    });
});


// php


$(document).ready(function () {
    $.get("./kosik.php", function (data, status) {
        $('#price').html("The price of the product is: " + data);
    });
});







