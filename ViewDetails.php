<?php

session_start();
if (isset($_SESSION['viewedItem'])){
    $imageUrl = $_SESSION['viewedItem'][0]['image_url'];
    $name = $_SESSION['viewedItem'][0]['name'];
    $description = $_SESSION['viewedItem'][0]['description'];
    $price = $_SESSION['viewedItem'][0]['price'];
}
else{
    $imageUrl = "Styles/Images/PNG/Image 1.png";
    $name = "Няма намерен предмет.";
    $description = "N/A";
    $price = "0";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="Styles/StylesE2.css">
    <link rel="stylesheet" href="Styles/Details.css">
    <title>Landing Page E1</title>
</head>

<body>
    <div class="header-bottom-bg position-absolute"></div>
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
        <section class="item d-flex justify-content-center">
            <div
                class="viewed-item border rounded-4 bg-white w-100 h-100 d-flex justify-content-center align-items-center pt-5 pb-5">
                <div class="image-container d-flex justify-content-center w-50">
                    <img src="<?php echo $imageUrl?>" alt="">
                </div>
                <p class="name fw-bold w-75"><?php echo $name?></p>
                <div class="d-flex w-75 flex-row justify-content-between align-items-center">
                    <p class="catalog"><?php echo $description?></p>
                    <p class="price fw-bold"><?php echo $price?> лв.</p>
                </div>
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
    <script src="Scripts/ScrollAnimationsViewDetails.js"></script>
    <script src="Scripts/ServerScripts/CountCartProducts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
</body>

</html>