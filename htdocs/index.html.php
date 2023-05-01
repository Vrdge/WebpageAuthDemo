<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/animate.css">

</head>

<body>
    <header>
        <div class="container">
            <div class="header_inner" id="header_inner">
                <div class="logo">
                    <a class="href_decoration" href="index.html">
                        <h3>Art<span class="spn">Trick</span></h3>
                    </a>
                </div>
                <div class="menu-burger">
                    <div class="menu_item menu_item1">Paintings</div>
                    <div class="menu_item menu_item2">Drawings</div>
                    <div class="menu_item menu_item3">Sculptures</div>
                    <div class="menu_item menu_item4">
                        <?= $_COOKIE['user'] ?>. <a href="validation.form/exit.php">Log Out</a>
                    </div>

                </div>
                <div class="menu_small_icon">
                    <div class="stick1"></div>
                    <div class="stick2"></div>
                    <div class="stick3"></div>
                </div>
                <div class="menu-small">
                    <div class="menu_small_item">Paintings</div>
                    <div class="menu_small_item">Drawings</div>
                    <div class="menu_small_item">Sculptures</div>
                    <div class="menu_small_item ">Login</div>
                </div>
            </div>



        </div>

        <container class="container_content">
            <div class="container_content_text">
                <h1 class="font_weight">Vincent van Ghog</h1>
            </div>
            <div class="content_image_inner_bckg">
                <a href="biography.html"><img class="content_image_inner"
                        src="https://media.vogue.fr/photos/5c8a55363d44a0083ccbef54/2:3/w_2560%2Cc_limit/GettyImages-625257378.jpg"
                        alt=""></a>
            </div>
        </container>
    </header>

    <div class="gallery_name">
        <h1>Paintings</h1>
    </div>
    <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="30"
        slides-per-view="3">
        <swiper-slide>
            <div class="item_wrapper">
                <div class="item"><img class="item_image"
                        src="https://i.pinimg.com/474x/8a/67/65/8a67658dccf3e119396cdb00bf6d94e6.jpg">
                    <h2>Author Name</h2>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="item_wrapper">
                <div class="item"><img class="item_image"
                        src="https://imgc.allpostersimages.com/img/posters/the-cafe-terrace-on-the-place-du-forum-arles-at-night-c-1888_u-L-F1IMTW0.jpg?artPerspective=n">
                    <h2>Author Name</h2>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="item_wrapper">
                <div class="item"><img class="item_image"
                        src="https://imgc.artprintimages.com/img/print/oil-painting-oil-painting_u-l-q1k61s40.jpg">
                    <h2>Author Name</h2>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="item_wrapper">
                <div class="item"><img class="item_image"
                        src="https://i.pinimg.com/474x/8a/67/65/8a67658dccf3e119396cdb00bf6d94e6.jpg">
                    <h2>Author Name</h2>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="item_wrapper">
                <div class="item"><img class="item_image"
                        src="https://i.pinimg.com/474x/8a/67/65/8a67658dccf3e119396cdb00bf6d94e6.jpg">
                    <h2>Author Name</h2>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="item_wrapper">
                <div class="item"><img class="item_image"
                        src="https://i.pinimg.com/474x/8a/67/65/8a67658dccf3e119396cdb00bf6d94e6.jpg">
                    <h2>Author Name</h2>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="item_wrapper">
                <div class="item"><img class="item_image"
                        src="https://i.pinimg.com/474x/8a/67/65/8a67658dccf3e119396cdb00bf6d94e6.jpg">
                    <h2>Author Name</h2>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="item_wrapper">
                <div class="item"><img class="item_image"
                        src="https://i.pinimg.com/474x/8a/67/65/8a67658dccf3e119396cdb00bf6d94e6.jpg">
                    <h2>Author Name</h2>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="item_wrapper">
                <div class="item"><img class="item_image"
                        src="https://i.pinimg.com/474x/8a/67/65/8a67658dccf3e119396cdb00bf6d94e6.jpg">
                    <h2>Author Name</h2>
                </div>
            </div>
        </swiper-slide>
    </swiper-container>



    <div class="artists_container">
        <h1>Famous Artists</h1>
    </div>
    <container class="container_authors">
        <div class="box">
            <a href="artist_slvdr.html">
                <div class="box_inner">
                    <img src="https://d3rf6j5nx5r04a.cloudfront.net/8YV8YlojDBIGFyYQmMTmXtY3TD4=/250x256/product/3/a/df638726161e4ba9abd062f0c1998dbe_opt.jpg"
                        alt="">
                </div>
                <div>Salvador Dali</div>
        </div>
        <div class="box">
            <a href="artist_leo.html">
                <div class="box_inner">
                    <img src="https://t0.gstatic.com/licensed-image?q=tbn:ANd9GcT3aSb4ttWw4r6FAX9SCkYE4H3KNPV58ajFu9gdo-5tNczb7cnJ2gRs_J2Da3Kc9-yC"
                        alt="">
                </div>
                <div>Leonardo da Vinci</div>
        </div>
        <div class="box">
            <a href="artist_ivan.html">
                <div class="box_inner">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/c/c6/Aivazovsky_-_Self-portrait_1874.jpg"
                        alt="asd">
                </div>
            </a>
            <div>Ivan Aivazovski</div>
        </div>
    </container>
    <footer class="footer">

        <div class="footer-left">

            <h3>Art<span>Trick</span></h3>

            <p class="footer-links">
                <a href="#">Home</a>
                <a href="#">Blog</a>
                <a href="#">Pricing</a>
                <a href="#">About</a>
                <a href="#">Contact</a>
            </p>

            <p class="footer-company-name">Art &copy; 2019</p>
        </div>

        <div class="footer-right">

            <div>
                <p><span>Armenia Stepanavan </span>Baghramyan 1</p>
            </div>

            <div>
                <p>+1 555 123456</p>
            </div>

            <div>
                <p><a href="mailto:supportArttrick@gmail.com">supportArtTrick@gmail.com</a></p>
            </div>

        </div>
    </footer>

    <script src="js/anime.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"
        integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/wow.min.js"></script>

</body>

</html>