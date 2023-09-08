<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/StylesE2.css">
    <title>Landing Page E1</title>
</head>

<body>
    <div class="header-bottom-bg position-absolute"></div>
    <div class="search-bg position-absolute"></div>
    <div class="banner position-absolute">
        <img class="position-absolute current" src="Styles/Images/PNG/Rectangle 100.png" alt="Banner Image">
        <div class="anchor-div position-relative">
            <button class="banner-slide-left h-100"></button>
            <div class="image-dots d-flex flex-row justify-content-center position-absolute">
                <div class="image-dot current-image rounded-5 p-1 me-1"></div>
                <div class="image-dot rounded-5 p-1 me-1"></div>
                <div class="image-dot rounded-5 p-1 me-1"></div>
                <div class="image-dot rounded-5 p-1"></div>
            </div>
            <button class="banner-slide-right h-100"></button>
        </div>
    </div>
    <main class="container">
        <header class="d-flex justify-content-between align-items-center flex-wrap">
            <section class="row w-100 justify-content-between">
                <div class="header-top-bg position-absolute"></div>
                <div class="col-5 d-flex justify-content-between align-items-center">
                    <a href="index.php"><img class="logo-icon" src="Styles/Images/SVG/Logo.svg" alt="Logo"></a>
                    <div class="vr"></div>
                    <div class="other-sites d-flex justify-content-between flex-nowrap">
                        <a class="me-2" href=""><img src="Styles/Images/SVG/Group 362.svg" alt="Logo"></a>
                        <a href=""><img src="Styles/Images/SVG/Group 363.svg" alt="Logo"></a>
                    </div>
                </div>
                <div class="nav-links col-5 d-flex justify-content-between align-items-center">
                    <div class="header-options d-flex justify-content-between">
                        <a href=""><img src="Styles/Images/SVG/Vector.svg" alt=""></a>
                        <a class="shopping-cart position-relative" href="Cart.php">
                            <img src="Styles/Images/SVG/Vector(1).svg" alt="">
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger visually-hidden">
                                0
                            </span>
                        </a>
                        <a href=""><img src="Styles/Images/SVG/Vector(2).svg" alt=""></a>
                    </div>
                    <div class="vr"></div>
                    <div class="login">
                        <a class="text-white fs-5 text-decoration-none text-uppercase d-flex align-items-center fw-bold"
                            href="">
                            <img class="me-2" src="Styles/Images/SVG/Vector(3).svg" alt="">
                            Вход
                        </a>
                    </div>
                    <div class="vr"></div>
                    <div class="social-media d-flex justify-content-between">
                        <a href="https://youtube.com"><img src="Styles/Images/SVG/yt.svg" alt=""></a>
                        <a href="https://facebook.com"><img src="Styles/Images/SVG/fb.svg" alt=""></a>
                    </div>
                    <div class="vr"></div>
                    <div class="phone-number">
                        <a class="text-white fs-5 text-decoration-none text-uppercase d-flex align-items-center fw-bold text-nowrap"
                            href="tel:">
                            <img class="me-2" src="Styles/Images/SVG/Vector(4).svg" alt="">
                            02 437 32 48
                        </a>
                    </div>
                    <div class="options-mobile">
                        <button class="btn">
                            <img src="Styles/Images/SVG/OptionsMobile.svg" alt="">
                        </button>
                    </div>
                </div>
            </section>
            <section class="nav-row row w-100">
                <nav class="col overflow-hidden d-flex flex-nowrap">
                    <button class="btn borders rounded-pill d-flex align-items-center me-2 text-nowrap">
                        <img src="Styles/Images/SVG/Home.svg" alt="">
                    </button>
                    <button
                        class="btn borders rounded-pill text-white text-uppercase d-flex align-items-center me-2 text-nowrap">
                        <img class="me-2" src="Styles/Images/SVG/Vector(5).svg" alt="">
                        Авточасти
                    </button>
                    <button
                        class="btn borders rounded-pill text-white text-uppercase d-flex align-items-center me-2 text-nowrap">
                        <img class="me-2" src="Styles/Images/SVG/Vector(6).svg" alt="">
                        Борса части
                    </button>
                    <button
                        class="btn borders rounded-pill text-white text-uppercase d-flex align-items-center me-2 text-nowrap">
                        <img class="me-2" src="Styles/Images/SVG/Vector(7).svg" alt="">
                        Автоборса
                    </button>
                    <button
                        class="btn borders rounded-pill text-white text-uppercase d-flex align-items-center me-2 text-nowrap">
                        <img class="me-2" src="Styles/Images/SVG/Vector(8).svg" alt="">
                        Продава коли
                    </button>
                    <button
                        class="btn borders rounded-pill text-white text-uppercase d-flex align-items-center me-2 text-nowrap">
                        <img class="me-2" src="Styles/Images/SVG/Vector(9).svg" alt="">
                        Продава части
                    </button>
                    <button
                        class="btn borders rounded-pill text-white text-uppercase d-flex align-items-center me-2 text-nowrap">
                        <img class="me-2" src="Styles/Images/SVG/game_controller.svg" alt="">
                        Игри
                    </button>
                    <button
                        class="btn borders rounded-pill text-white text-uppercase d-flex align-items-center me-2 text-nowrap">
                        <img class="me-2" src="Styles/Images/SVG/Vector(10).svg" alt="">
                        Застраховка
                    </button>
                    <div class="end-overlay">
                        <button class="btn d-flex align-items-center">
                            <img src="Styles/Images/SVG/ArrowWhite.svg" alt="">
                        </button>
                    </div>
                </nav>
            </section>
        </header>
        <section class="search bg-white rounded-4 position-relative">
            <img class="blue-pointer position-absolute" src="Styles/Images/SVG/Pointer.svg" alt="">
            <div class="search-header d-flex align-items-center text-nowrap fw-bold">
                <img src="Styles/Images/SVG/SearchIcon.svg" alt="">
                Бързо търсене
            </div>
            <form class="search-form d-flex justify-content-between align-items-center" action="" method="post">
                <input class="rounded-pill text-nowrap" type="text"
                    placeholder="Търсете на Част, марка, категория, обява или др.">

                <div class="submit-div d-flex justify-content-between align-items-center">
                    <button class="filters-mobile btn"><img src="Styles/Images/SVG/FilterOptions.svg" alt=""></button>
                    <input class="btn rounded-pill text-nowrap fw-bold text-white" type="submit" value="Търсене">
                </div>
            </form>
            <div class="filters d-flex align-items-center">
                <button class="btn borders rounded-pill text-white me-2 text-nowrap pt-1 pb-1">
                    Всичко
                </button>
                <button class="btn borders rounded-pill me-2 text-nowrap pt-1 pb-1">
                    Авточасти
                </button>
                <button class="btn borders rounded-pill me-2 text-nowrap pt-1 pb-1">
                    Борса части
                </button>
                <button class="btn borders rounded-pill me-2 text-nowrap pt-1 pb-1">
                    Автоборса
                </button>
                <button class="btn borders rounded-pill me-2 text-nowrap pt-1 pb-1">
                    Продава коли
                </button>
                <button class="btn borders rounded-pill me-2 text-nowrap pt-1 pb-1">
                    Продава части
                </button>
            </div>
        </section>

        <section class="content">
            <div class="highlight-row row gx-4 flex-row justify-content-between">
                <div class="highlight col-3 p-2 d-flex">
                    <img src="Styles/Images/SVG/Vector(12).svg" alt="">
                    <div>
                        <p class="highlight-title fw-bold">Експресна доставка</p>
                        <p class="highlight-text">Доставяме до всяка точка на България.</p>
                    </div>
                </div>
                <div class="highlight col-3 p-2 d-flex">
                    <img src="Styles/Images/SVG/Vector(13).svg" alt="">
                    <div>
                        <p class="highlight-title fw-bold">Нови части всеки ден</p>
                        <p class="highlight-text">Ежедневно зареждаме нова стока.</p>
                    </div>
                </div>
                <div class="highlight col-3 p-2 d-flex">
                    <img src="Styles/Images/SVG/Vector(14).svg" alt="">
                    <div>
                        <p class="highlight-title fw-bold">Проверено качество</p>
                        <p class="highlight-text">Авточасти с гаранция.</p>
                    </div>
                </div>
                <div class="highlight col-3 p-2 d-flex">
                    <img src="Styles/Images/SVG/Vector(15).svg" alt="">
                    <div>
                        <p class="highlight-title fw-bold">Право на връщане</p>
                        <p class="highlight-text">14 дни право на връщане на всяка поръчка</p>
                    </div>
                </div>
            </div>

            <div class="offers-row row">
                <div
                    class="offer-card col-3 pt-4 pb-4 ps-2 pe-2 rounded-4 d-flex flex-column justify-content-between align-items-center mb-4">
                    <div>
                        <img class="mb-3" src="Styles/Images/SVG/CogBig.svg" alt="" width="32" height="32">
                        <h3 class="fw-bold">Авточасти</h3>
                    </div>
                    <p>Най-големия онлайн магазин за авточасти в България!</p>
                    <button class="btn rounded-pill d-flex align-items-center fw-bold">
                        Разгледай
                        <img class="ms-2" src="Styles/Images/SVG/ArrowBlue.svg" alt="">
                    </button>
                </div>
                <div class="offer-slider col-9 pe-0 ps-0 position-relative">
                    <h5 class="fw-bold position-absolute">Специални предложения:</h5>
                    <div class="offers d-flex flex-row position-relative overflow-hidden mt-4">
                        <div class="offer-start-overlay d-flex align-items-center visually-hidden">
                            <button class="previous-offer btn d-flex align-items-center">
                                <img src="Styles/Images/SVG/ArrowBlue.svg" alt="">
                            </button>
                        </div>
                        <div class="offer-item current">
                            <img src="Styles/Images/PNG/image 1.png" alt="">
                            <p class="name fw-bold">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <p class="catalog">Кат. №: s_167232784</p>
                                <p class="price fw-bold">967.70 лв.</p>
                            </div>
                        </div>
                        <div class="offer-item">
                            <img src="Styles/Images/PNG/image 2.png" alt="">
                            <p class="name fw-bold">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <p class="catalog">Кат. №: s_167232784</p>
                                <p class="price fw-bold">967.70 лв.</p>
                            </div>
                        </div>
                        <div class="offer-item">
                            <img src="Styles/Images/PNG/image 1.png" alt="">
                            <p class="name fw-bold">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <p class="catalog">Кат. №: s_167232784</p>
                                <p class="price fw-bold">967.70 лв.</p>
                            </div>
                        </div>
                        <div class="offer-item">
                            <img src="Styles/Images/PNG/image 2.png" alt="">
                            <p class="name fw-bold">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <p class="catalog">Кат. №: s_167232784</p>
                                <p class="price fw-bold">967.70 лв.</p>
                            </div>
                        </div>
                        <div class="offer-item">
                            <img src="Styles/Images/PNG/image 1.png" alt="">
                            <p class="name fw-bold">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <p class="catalog">Кат. №: s_167232784</p>
                                <p class="price fw-bold">967.70 лв.</p>
                            </div>
                        </div>
                        <div class="offer-item">
                            <img src="Styles/Images/PNG/image 2.png" alt="">
                            <p class="name fw-bold">Фар за Audi A5 Coupe I (06.2007 - 01.2017), купе, позиция: дясна</p>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <p class="catalog">Кат. №: s_167232784</p>
                                <p class="price fw-bold">967.70 лв.</p>
                            </div>
                        </div>
                        <div class="offer-end-overlay d-flex align-items-center justify-content-end">
                            <button class="next-offer btn d-flex align-items-center">
                                <img src="Styles/Images/SVG/ArrowBlue.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="latest-row" class="latest-row row">
                <div class="latest-slider col-9 pe-0 ps-0 position-relative">
                    <h5 class="fw-bold position-absolute">Последни оферти и запитвания:</h5>
                    <div class="latest d-flex flex-row position-relative overflow-hidden me-0 ms-0 mt-4">
                        <div class="latest-item current">
                            <img src="Styles/Images/PNG/image 1 (green border).png" alt="">
                            <p class="name fw-bold"><span class="buying text-uppercase">КУПУВАМ</span> Фар за Audi A5
                                Coupe I (06.2007
                                - 01.2017)
                            </p>
                        </div>
                        <div class="latest-item">
                            <img src="Styles/Images/PNG/image 2 (green border).png" alt="">
                            <p class="name fw-bold"><span class="offerring text-uppercase">Оферта за</span> Фар за Audi
                                A5 Coupe I
                                (06.2007 - 01.2017)
                            </p>
                        </div>
                        <div class="latest-item">
                            <img src="Styles/Images/PNG/image 1 (green border).png" alt="">
                            <p class="name fw-bold"><span class="buying text-uppercase">КУПУВАМ</span> Фар за Audi A5
                                Coupe I (06.2007
                                - 01.2017)</p>
                        </div>
                        <div class="latest-item">
                            <img src="Styles/Images/PNG/image 2 (green border).png" alt="">
                            <p class="name fw-bold"><span class="offerring text-uppercase">Оферта за</span> Фар за Audi
                                A5 Coupe I
                                (06.2007 - 01.2017)
                            </p>
                        </div>
                        <div class="latest-item">
                            <img src="Styles/Images/PNG/image 1 (green border).png" alt="">
                            <p class="name fw-bold"><span class="buying text-uppercase">КУПУВАМ</span> Фар за Audi A5
                                Coupe I (06.2007
                                - 01.2017)
                            </p>
                        </div>
                        <div class="latest-item">
                            <img src="Styles/Images/PNG/image 2 (green border).png" alt="">
                            <p class="name fw-bold"><span class="offerring text-uppercase">Оферта за</span> Фар за Audi
                                A5 Coupe I
                                (06.2007 - 01.2017)
                            </p>
                        </div>
                    </div>
                </div>
                <div
                    class="auction-card col-4 pt-4 pb-4 ps-2 pe-2 rounded-4 d-flex flex-column justify-content-between align-items-center">
                    <div>
                        <img class="mb-3" src="Styles/Images/SVG/Auction.svg" alt="" width="32" height="32">
                        <h3 class="fw-bold">Борса части</h3>
                    </div>
                    <p>Най-голямата борса за авточасти в България!</p>
                    <button class="btn rounded-pill d-flex align-items-center fw-bold">
                        Разгледай
                        <img class="ms-2" src="Styles/Images/SVG/ArrowGreen.svg" alt="">
                    </button>
                </div>
            </div>
            <div class="other-row row flex-row">
                <div
                    class="car-auction-card col-4 pt-4 pb-4 ps-2 pe-2 rounded-4 d-flex flex-column justify-content-between align-items-center mt-4">
                    <div>
                        <img class="mb-3" src="Styles/Images/SVG/Vector(7).svg" alt="" width="32" height="32">
                        <h3 class="fw-bold">Автоборса</h3>
                    </div>
                    <p>Залагане, търгуване и продаване на автомобили.</p>
                    <button class="btn rounded-pill d-flex align-items-center fw-bold">
                        Разгледай
                        <img class="ms-2" src="Styles/Images/SVG/ArrowTeal.svg" alt="">
                    </button>
                </div>
                <div
                    class="car-card col-4 pt-4 pb-4 ps-2 pe-2 rounded-4 d-flex flex-column justify-content-between align-items-center mt-4">
                    <div>
                        <img class="mb-3" src="Styles/Images/SVG/Vector(8).svg" alt="" width="32" height="32">
                        <h3 class="fw-bold">Продава коли</h3>
                    </div>
                    <p>Обяви за коли. Част от MEGACARS.</p>
                    <button class="btn rounded-pill d-flex align-items-center fw-bold mt-3">
                        Разгледай
                        <img class="ms-2" src="Styles/Images/SVG/ArrowOrange.svg" alt="">
                    </button>
                    <p class="d-flex align-items-center mt-2">
                        Към MEGACARS
                        <img class="ms-2" src="Styles/Images/SVG/ArrowWhite.svg" alt="">
                    </p>
                </div>
                <div
                    class="parts-card col-4 pt-4 pb-4 ps-2 pe-2 rounded-4 d-flex flex-column justify-content-between align-items-center mt-4">
                    <div>
                        <img class="mb-3" src="Styles/Images/SVG/Vector(9).svg" alt="" width="32" height="32">
                        <h3 class="fw-bold">Продава части</h3>
                    </div>
                    <p>Обяви за части. Част от MEGAОБЯВИ.</p>
                    <button class="btn rounded-pill d-flex align-items-center fw-bold mt-3">
                        Разгледай
                        <img class="ms-2" src="Styles/Images/SVG/ArrowYellow.svg" alt="">
                    </button>
                    <p class=" d-flex align-items-center mt-2">
                        Към MEGAОБЯВИ
                        <img class="ms-2" src="Styles/Images/SVG/ArrowWhite.svg" alt="">
                    </p>
                </div>
                <div
                    class="games-card col-4 pt-4 pb-4 ps-2 pe-2 rounded-4 d-flex flex-column justify-content-between align-items-center mt-4">
                    <div>
                        <img class="mb-3" src="Styles/Images/SVG/game_controller.svg" alt="" width="32" height="32">
                        <h3 class="fw-bold">Игри</h3>
                    </div>
                    <p>Забавления за ценители.</p>
                    <button class="btn rounded-pill d-flex align-items-center fw-bold">
                        Разгледай
                        <img class="ms-2" src="Styles/Images/SVG/ArrowPurple.svg" alt="">
                    </button>
                </div>
            </div>
            <div class="miscelaneous-row row flex-row">
                <div
                    class="insurance-card col-4 pt-2 pb-2 ps-3 pe-3 d-flex flex-column justify-content-center align-items-center mt-4">
                    <h5>
                        <img src="Styles/Images/SVG/Vector(25).svg" alt="">
                        Застраховки
                    </h5>
                    <p class="mb-0">Застраховай автомобила си.</p>
                </div>
                <div
                    class="credit-card col-4 pt-2 pb-2 ps-3 pe-3 d-flex flex-column justify-content-center align-items-center mt-4">
                    <h5>
                        <img src="Styles/Images/SVG/Vector(26).svg" alt="">
                        Кредити
                    </h5>
                    <p class="mb-0"><strong>MEGA</strong> в нужда се познава.</p>
                </div>
                <div
                    class="diary-card col-4 pt-2 pb-2 ps-3 pe-3 d-flex flex-column justify-content-center align-items-center mt-4">
                    <h5>
                        <img src="Styles/Images/SVG/Vector(27).svg" alt="">
                        Автодневник
                    </h5>
                    <p class="mb-0">Твоят автодневник.</p>
                </div>
                <div
                    class="news-card col-4 pt-2 pb-2 ps-3 pe-3 d-flex flex-column justify-content-center align-items-center mt-4">
                    <h5>
                        <img src="Styles/Images/SVG/Vector(28).svg" alt="">
                        Новини
                    </h5>
                    <p class="mb-0">Всичко в света на колите.</p>
                </div>
            </div>

            <div class="comments d-flex justify-content-center position-relative">

                <button class="previous-comment position-absolute d-flex align-items-center justify-content-center">
                    <img src="Styles/Images/SVG/ArrowBlueShadowed.svg" alt="" width="55.05" height="36">
                </button>
                <button class="next-comment position-absolute d-flex align-items-center justify-content-center">
                    <img src="Styles/Images/SVG/ArrowBlueShadowed.svg" alt="" width="55.05" height="36">
                </button>
                <div
                    class="comment-box bg-white d-flex justify-content-between flex-column align-items-center rounded-4 position-absolute current">
                    <div class="comment d-flex justify-content-start flex-column align-items-center">
                        <img class="mb-3" src="Styles/Images/SVG/“.svg" alt="" width="28.66" height="26">
                        Единственото място в Интернет (българско) , където намирам части за коли 25+ години. Имат
                        доставка за Пловдив! Реално Ти ги носят на адрес. Не мога да кажа нищо лошо.
                    </div>
                    <div class="commenter d-flex justify-content-center">
                        <div class="user-pic me-2"></div>
                        <div class="user">
                            <div class="username fw-bold">Мартин Илиев</div>
                            <div class="stars">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="comment-box bg-white d-flex justify-content-between flex-column align-items-center rounded-4 position-absolute previous-1">
                    <div class="comment d-flex justify-content-start flex-column align-items-center">
                        <img class="mb-3" src="Styles/Images/SVG/“.svg" alt="" width="28.66" height="26">
                        Много бързо и изключително коректно и професионално отношение!
                    </div>
                    <div class="commenter d-flex justify-content-center">
                        <div class="user-pic me-2"></div>
                        <div class="user">
                            <div class="username fw-bold">Мартин Илиев</div>
                            <div class="stars">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="comment-box bg-white d-flex justify-content-between flex-column align-items-center rounded-4 position-absolute previous-2">
                    <div class="comment d-flex justify-content-start flex-column align-items-center">
                        <img class="mb-3" src="Styles/Images/SVG/“.svg" alt="" width="28.66" height="26">
                        Реагират своевременно, СУК работи и повишава качеството на услугите.
                    </div>
                    <div class="commenter d-flex justify-content-center">
                        <div class="user-pic me-2"></div>
                        <div class="user">
                            <div class="username fw-bold">Мартин Илиев</div>
                            <div class="stars">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="comment-box bg-white d-flex justify-content-between flex-column align-items-center rounded-4 position-absolute next-1">
                    <div class="comment d-flex justify-content-start flex-column align-items-center">
                        <img class="mb-3" src="Styles/Images/SVG/“.svg" alt="" width="28.66" height="26">
                        Доволен съм от поръчаните до момента авточасти. Хубаво е да Ви има на пазара с авточасти, защото
                        иначе автоморгите ще откачат с високите си цени. Вие сте нещо като регулатор на този не малък
                        пазар на части втора употреба. Благодаря!
                    </div>
                    <div class="commenter d-flex justify-content-center">
                        <div class="user-pic me-2"></div>
                        <div class="user">
                            <div class="username fw-bold">Мартин Илиев</div>
                            <div class="stars">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="comment-box bg-white d-flex justify-content-between flex-column align-items-center rounded-4 position-absolute next-2">
                    <div class="comment d-flex justify-content-start flex-column align-items-center">
                        <img class="mb-3" src="Styles/Images/SVG/“.svg" alt="" width="28.66" height="26">
                        СУПЕР
                    </div>
                    <div class="commenter d-flex justify-content-center">
                        <div class="user-pic me-2"></div>
                        <div class="user">
                            <div class="username fw-bold">Мартин Илиев</div>
                            <div class="stars">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                                <img src="Styles/Images/SVG/Star.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="map position-relative">
                <img src="Styles/Images/SVG/DotMap.svg" alt="">
                <div class="location sofia position-absolute d-flex justify-content-center align-items-center">
                    <div class="location-relative position-relative d-flex justify-content-center align-items-center">
                        <img class="pin position-absolute" src="Styles/Images/SVG/MapPin.svg" alt="">
                        <img class="gear position-absolute" src="Styles/Images/SVG/Fill-1.svg" alt="">
                        <img class="wrench position-absolute" src="Styles/Images/SVG/Combined-Shape.svg" alt="">
                        <div class="address position-absolute d-flex justify-content-center flex-row rounded-pill">
                            <div class="address-info d-flex flex-column justify-content-center">
                                <p class="fw-bold">MEGAPARTS Sofia</p>
                                <p>ул. Васил Левски №123</p>
                            </div>
                            <div class="locator d-flex flex-column justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                        </div>
                        <div
                            class="address-mobile position-absolute d-flex justify-content-center flex-row rounded-pill">
                            <div class="address-info d-flex flex-column justify-content-center">
                                <p class="fw-bold">MEGAPARTS Sofia</p>
                            </div>
                            <div class="locator d-flex flex-column justify-content-center">
                                <img src="Styles/Images/SVG/ArrowWhite.svg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="location varna position-absolute d-flex justify-content-center align-items-center">
                    <div class="location-relative position-relative d-flex justify-content-center align-items-center">
                        <img class="pin position-absolute" src="Styles/Images/SVG/MapPin.svg" alt="">
                        <img class="gear position-absolute" src="Styles/Images/SVG/Fill-1.svg" alt="">
                        <img class="wrench position-absolute" src="Styles/Images/SVG/Combined-Shape.svg" alt="">
                        <div
                            class="address position-absolute d-flex justify-content-center flex-row-reverse rounded-pill">
                            <div class="address-info d-flex flex-column justify-content-center">
                                <p class="fw-bold">MEGAPARTS Varna</p>
                                <p>ул. Васил Левски №123</p>
                            </div>
                            <div class="locator d-flex flex-column justify-content-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white"
                                    class="bi bi-geo-alt" viewBox="0 0 16 16">
                                    <path
                                        d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z" />
                                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="products-row row mt-5 mb-5">
            </div>
        </section>
        <footer>
            <div class="footer-bg position-absolute"></div>
            <div class="row flex-row justify-content-between">
                <div class="footer-col col-md-3 d-flex flex-column justify-content-between align-items-center">
                    <div class="footer-links rounded-3">
                        <p class="footer-header fw-bold">Полезно за вас</p>
                        <p><a href="">Формуляр за връщане</a></p>
                        <p><a href="">Мнения за <span>MEGAPARTS</span></a></p>
                        <p><a href="">Регистрирай се за продавач</a></p>
                    </div>
                    <div class="footer-links rounded-3">
                        <a class="car-rating fw-bold" href="">Онлайн оценка на колата ви</a>
                    </div>
                </div>
                <div class="footer-col col-md-3 d-flex flex-column justify-content-between align-items-center">
                    <div class="footer-links rounded-3">
                        <p class="footer-header fw-bold">Онлайн Пазаруване</p>
                        <p><a href="">Общи условия на платформата</a></p>
                        <p><a href="">Общи условия на MEGAPARTS Борса</a></p>
                        <p><a href="">Общи условия Вендор</a></p>
                        <p><a href="">Политика за използване на “бисквитки”</a></p>
                        <p><a href="">Политика за защита на лични данни</a></p>
                    </div>
                </div>
                <div class="footer-col col-md-3 d-flex flex-column justify-content-between align-items-center">
                    <div class="footer-links rounded-3">
                        <p class="footer-header fw-bold">За нас</p>
                        <p><a href="">Представяне</a></p>
                        <p><a href="">Социални мрежи</p>
                        <p><a href="tel:">02 437 32 48</a></p>
                        <p><a href="mailto:">at@megaparts.bg</a></p>
                    </div>
                </div>
                <div class="footer-col col-md-3 d-flex flex-column justify-content-between align-items-center">
                    <div class="footer-links rounded-3 d-flex flex-column justify-content-between align-items-center">
                        <div class="d-flex flex-column justify-content-between align-items-center m-2">
                            <a href="index.php"><img src="Styles/Images/SVG/Logo.svg" alt="Logo"></a>
                            <p class="copyright">2023 © MEGAPARTS Marketplace</p>
                        </div>
                        <div class="d-flex flex-column justify-content-between align-items-center m-2">
                            <a class="mb-2" href=""><img src="Styles/Images/SVG/Group 362.svg" alt="Logo"></a>
                            <a href=""><img src="Styles/Images/SVG/Group 363.svg" alt="Logo"></a>
                        </div>
                    </div>
                </div>
        </footer>
    </main>

    <script src="Scripts/Libraries/jquery-3.7.0-min.js"></script>
    <script src="Scripts/Libraries/gsap/minified/gsap.min.js"></script>
    <script src="Scripts/Libraries/ScrollMagic.min.js"></script>
    <script src="Scripts/Libraries/ScrollMagicPlugins/animation.gsap.js"></script>
    <script src="Scripts/Libraries/ScrollMagicPlugins/debug.addIndicators.js"></script>
    <script src="Scripts/ScrollAnimations.js"></script>
    <script src="Scripts/CommentCarousel.js"></script>
    <script src="Scripts/SlideItem.js"></script>
    <script src="Scripts/AddressReveal.js"></script>
    <script src="Scripts/BannerSlider.js"></script>
    <script src="Scripts/SwapCommentArrows.js"></script>
    <script src="Scripts/ServerScripts/LoadProductFromData.js"></script>
    <script src="Scripts/ServerScripts/CountCartProducts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>