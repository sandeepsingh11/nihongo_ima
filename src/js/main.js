/* =============== NAV TOGGLE =============== */
var navToggle = document.getElementById('hamburger');
var navContainer = document.getElementById('nav-container');

navToggle.addEventListener('click', function() {
    var currentHeight = navContainer.style.height;
    console.log(currentHeight);

    if (currentHeight == '0px') {
        navContainer.style.height = '150px';
    }
    else {
        navContainer.style.height = '0px';
    }
});