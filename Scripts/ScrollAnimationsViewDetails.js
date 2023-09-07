const controller = new ScrollMagic.Controller();
//---------------------------------------------------------------------------------------
// Pinning
//---------------------------------------------------------------------------------------

//I found a bug that if you resize the page, the navbar will be slightly offset. Both the buttons and the background.
const navbarPin = new ScrollMagic.Scene(
    {
        triggerElement: '.nav-row',
        triggerHook: 0.01,
    })
    .setPin('nav', { pushFollowers: false })
    .addTo(controller);

const navbarRelativePosition = new ScrollMagic.Scene(
    {
        triggerElement: '.nav-row',
        triggerHook: 0.01,
    })
    .setTween(TweenMax.from('.nav-row', {
        onStart: () => {
            document.querySelector('.header-bottom-bg').classList.remove('position-absolute');
            document.querySelector('.header-bottom-bg').style.zIndex = 5;
        },
        onReverseComplete: () => {
            document.querySelector('.header-bottom-bg').classList.add('position-absolute');
            document.querySelector('.header-bottom-bg').style.zIndex = -1;
        }
    }))
    .addTo(controller);

const navbarBgPin = new ScrollMagic.Scene(
    {
        triggerElement: '.nav-row',
        triggerHook: 0.01,
    })
    .setPin('.header-bottom-bg', { pushFollowers: false })
    .addTo(controller);