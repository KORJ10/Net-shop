let mainCardC = document.querySelector('.main-cardC');
let thumbnailsC = document.querySelectorAll('.thumbnailC');

thumbnailsC.forEach((thumbnail) => {
    thumbnail.addEventListener('click', function() {
        let mainImagePath = mainCardC.querySelector('img').getAttribute('src');
        let thumbnailImagePath = thumbnail.getAttribute('src');

        mainCardC.querySelector('img').setAttribute('src', thumbnailImagePath);
        thumbnail.setAttribute('src', mainImagePath);
    });
});

