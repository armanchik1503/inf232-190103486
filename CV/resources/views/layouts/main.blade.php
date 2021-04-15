<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>@lang('main.title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Template Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700" rel="stylesheet">

    <!-- Template CSS Files -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/preloader.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/circle.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fm.revealator.jquery.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/stylewitcher.css')}}" rel="stylesheet">



    <!-- CSS Skin File -->
    <link href="{{asset('css/skins/green.css')}}" rel="stylesheet">

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
    <link rel="stylesheet" type="text/css" href="{{asset('css/styleswitcher.css')}}" />

    <!-- Modernizr JS File -->
    <script src="{{asset('js/modernizr.custom.js')}}"></script>
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
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark container">
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-auto">
                        @php $locale = session()->get('locale'); @endphp
                        <li class="nav-item dropdown">
                            <a style="color:black;" id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @switch($locale)
                                @case('ru')
                                Russian
                                @break
                                @case('kz')
                                Kazakh
                                @break
                                @default
                                English
                                @endswitch
                                <span class="caret"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="locale/ru">Russian</a>
                                <a class="dropdown-item" href="locale/kz">Kazakh</a>
                                <a class="dropdown-item" href="locale/en"> English</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- Fixed Navigation Starts -->
        <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
            <li class="icon-box active">
                <i class="fa fa-home"></i>
                <a href="{{route('home')}}">
                    <h2>@lang('main.home')</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-user"></i>
                <a href="{{route('about')}}">
                    <h2>@lang('main.about')</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-briefcase"></i>
                <a href="{{route('portfolio')}}">
                    <h2>@lang('main.portfolio')</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-envelope-open"></i>
                <a href="{{route('post.index')}}">
                    <h2>@lang('main.posts')</h2>
                </a>
            </li>
            <li class="icon-box">
                <i class="fa fa-paper-plane" aria-hidden="true"></i>
                <a href="{{route('blog.index')}}">
                    <h2>@lang('main.blogs')</h2>
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

    <script src="{{asset('js/jquery-3.5.0.min.js')}}"></script>
    <script src="{{asset('js/styleswitcher.js')}}"></script>
    <script src="{{asset('js/preloader.min.js')}}"></script>
    <script src="{{asset('js/fm.revealator.jquery.min.js')}}"></script>
    <script src="{{asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('js/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('js/classie.js')}}"></script>
    <script src="{{asset('js/cbpGridGallery.js')}}"></script>
    <script src="{{asset('js/jquery.hoverdir.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>



</body>


</html>