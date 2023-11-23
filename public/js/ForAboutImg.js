window.onload = function() {
    var feature1 = document.querySelector('.feature1 img');
    var images = document.querySelectorAll('.feature img');

    var width = feature1.offsetWidth;
    var height = feature1.offsetHeight;

    images.forEach(function(img) {
        img.style.width = width + 'px';
        img.style.height = height + 'px';
    });
}