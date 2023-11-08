<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <title>{{ $title }}</title>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

<!-- Header -->
<header class="header" style="background-color:#e5cc68;">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="header__logo">
                    <a href="./index.html"><img src="img/logo_cafe_delicius.png" alt=""></a>
                </div>
            </div>
            <div class="col-md-6" >
                <div class="hero__search">
                    <div class="hero__search__form" >
                        <form action="#">
                            <input type="text" placeholder="Bebidas, Salgados, doces ...">
                            <button type="submit" class="site-btn"><i class="bi bi-search"></i></button>
                        </form>
                    </div>

                </div>
            </div>
            <div class="col-md-2" >
                <div class=" hero__search__phone__text">
                    <h5> <i class="fa fa-phone"></i> (69) 9.93911-1112</h5>
                    <span>Funcionamento das 6h as 20h</span>
                </div>
            </div>
            <div class="col-md-2" >
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                    </ul>
                    <div class="header__top__right__auth">
                        <a href="#"><i class="fa fa-user"></i> Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>




    {{ $slot }}









    {{-- rodapé --}}
    <footer class="footer spad" style=" background-color:#e5cc68;">
        <div class="container">
            <div class="row" >
                <div class="col" style="margin-right: 5%">
                    <div class="footer__widget">
                        <h6>Aproveite seus melhores momentos com um café!</h6>

                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                        <div class="footer__copyright__text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>
