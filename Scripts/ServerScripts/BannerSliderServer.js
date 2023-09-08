let bannerIndex = 0;
let bannerCount = 0;
let bannerImages;

$.post('PHP/GetBanners.php', { bannerIndex: '' }, (output) => {
    const data = JSON.parse(output);
    bannerCount = data.length - 1;
})

$.post('PHP/GetBanners.php', { bannerIndex: '' }, (output) => {
    const data = JSON.parse(output);
    bannerImages = data;
})

const bannerNext = document.querySelector('.banner-slide-left');
const bannerPrevious = document.querySelector('.banner-slide-right');
bannerNext.addEventListener('click', () => {
    if (bannerIndex > 0) {
        slideBanner('.banner', 'left', -1);
        highlightBannerDot(bannerIndex);
    }
});

bannerPrevious.addEventListener('click', () => {
    if (bannerIndex < bannerCount) {
        slideBanner('.banner', 'right', 1);
        highlightBannerDot(bannerIndex);
    }
});

const slideBanner = (sliderClass, direction, sign) => {
    bannerIndex = bannerIndex + sign;

    const banner = $(sliderClass);

    const currentBanner = $(sliderClass + " img.current")

    let imageFile = bannerImages[bannerIndex]['image_url'];

    const imagePath = `Styles/Images/PNG/${imageFile}`;
    const nextBanner = $(`<img class="position-absolute" src="${imagePath}" alt="Banner Image">`);

    banner.prepend(nextBanner);
    nextBanner.addClass('current');


    nextBanner.css('transform', `translateX(0%)`);
    if (direction === 'left') {
        currentBanner.css('transform', `translateX(300%)`);
    }
    else if (direction === 'right') {
        currentBanner.css('transform', `translateX(-300%)`);
    }

    currentBanner.addClass('sliding');
    currentBanner.removeClass('current');
    setTimeout(() => { currentBanner.remove() }, 1500)
}

const highlightBannerDot = (bannerIndex) => {
    document.querySelector('.image-dots .image-dot.current-image').classList.remove('current-image');
    document.querySelectorAll('.image-dots .image-dot')[bannerIndex].classList.add('current-image');
}