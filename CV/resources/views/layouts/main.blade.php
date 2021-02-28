<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>Personal Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/preloader.min.css" rel="stylesheet">
    <link href="css/circle.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/fm.revealator.jquery.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/stylewitcher.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">


    <!-- CSS Skin File -->
    <link href="css/skins/green.css" rel="stylesheet">

    <!-- Live Style Switcher - demo only -->
    <link rel="alternate stylesheet" type="text/css" title="blue" href="css/skins/blue.css" />
    <link rel="alternate stylesheet" type="text/css" title="green" href="css/skins/green.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellow" href="css/skins/yellow.css" />
    <link rel="alternate stylesheet" type="text/css" title="blueviolet" href="css/skins/blueviolet.css" />
    <link rel="alternate stylesheet" type="text/css" title="goldenrod" href="css/skins/goldenrod.css" />
    <link rel="alternate stylesheet" type="text/css" title="magenta" href="css/skins/magenta.css" />
    <link rel="alternate stylesheet" type="text/css" title="orange" href="css/skins/orange.css" />
    <link rel="alternate stylesheet" type="text/css" title="purple" href="css/skins/purple.css" />
    <link rel="alternate stylesheet" type="text/css" title="red" href="css/skins/red.css" />
    <link rel="alternate stylesheet" type="text/css" title="yellowgreen" href="css/skins/yellowgreen.css" />
    <link rel="stylesheet" type="text/css" href="css/styleswitcher.css" />

    <!-- Modernizr JS File -->
    <script src="js/modernizr.custom.js"></script>
</head>

<body class="home light">
    <!-- Live Style Switcher Starts - demo only -->
    <div id="switcher" class="">
        <div class="content-switcher">
            <h4>STYLE SWITCHER</h4>
            <ul>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src="img/styleswitcher/purple.png" alt="purple" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src="img/styleswitcher/red.png" alt="red" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src="img/styleswitcher/blueviolet.png" alt="blueviolet" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src="img/styleswitcher/blue.png" alt="blue" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src="img/styleswitcher/goldenrod.png" alt="goldenrod" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src="img/styleswitcher/magenta.png" alt="magenta" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src="img/styleswitcher/yellowgreen.png" alt="yellowgreen" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src="img/styleswitcher/orange.png" alt="orange" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src="img/styleswitcher/green.png" alt="green" /></a>
                </li>
                <li>
                    <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src="img/styleswitcher/yellow.png" alt="yellow" /></a>
                </li>
            </ul>
            <div id="hideSwitcher">&times;</div>
        </div>
    </div>
    <div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div>
    <!-- Live Style Switcher Ends - demo only -->
    <!-- Header Starts -->
    <header class="header" id="navbar-collapse-toggle">
        <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box active">
                <i class="fa fa-home"></i>
                <a href="{{route('home')}}">
                    <h2>Home</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-user"></i>
                <a href="{{route('about')}}">
                    <h2>About</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-briefcase"></i>
                <a href="{{route('portfolio')}}">
                    <h2>Portfolio</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-envelope-open"></i>
                <a href="{{route('post.index')}}">
                    <h2>Posts</h2>
                </a>
            </li>
        </ul>
        <!-- Fixed Navigation Ends -->
        <!-- Mobile Menu Starts -->
        <nav role="navigation" class="d-block d-lg-none">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
                <ul class="list-unstyled" id="menu">
                    <li class="active"><a href="{{route('home')}}"><i class="fa fa-home"></i><span>Home</span></a></li>
                    <li><a href="{{route('about')}}"><i class="fa fa-user"></i><span>About</span></a></li>
                    <li><a href="portfolio.html"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                    <li><a href="contact.html"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
                </ul>
            </div>
        </nav>
        <!-- Mobile Menu Ends -->
    </header>

    @yield('content')

    <script src="js/jquery-3.5.0.min.js"></script>
    <script src="js/styleswitcher.js"></script>
    <script src="js/preloader.min.js"></script>
    <script src="js/fm.revealator.jquery.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/masonry.pkgd.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpGridGallery.js"></script>
    <script src="js/jquery.hoverdir.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/custom.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>


</html>