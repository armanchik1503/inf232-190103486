@extends('layouts.main')

@section('content')

<section class="title-section text-left text-sm-center revealator-slideup revealator-once revealator-delay1">
    <h1>@lang('main.about') <span>@lang('main.me')</span></h1>
    <span class="title-bg">@lang('main.resume')</span>
</section>
<!-- Page Title Ends -->
<!-- Main Content Starts -->
<section class="main-content revealator-slideup revealator-once revealator-delay1">
    <div class="container">
        <div class="row">
            <!-- Personal Info Starts -->
            <div class="col-12 col-lg-5 col-xl-6">
                <div class="row">
                    <div class="col-12">
                        <h3 class="text-uppercase custom-title mb-0 ft-wt-600">@lang('main.pi')</h3>
                    </div>
                    <div class="col-12 d-block d-sm-none">
                        <img src="img/ara.jpeg" class="img-fluid main-img-mobile" alt="my picture" style="width: 230px;" />
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">@lang('main.fn') :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Arman</span> </li>
                            <li> <span class="title">@lang('main.ln') :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Kaliakyn</span> </li>
                            <li> <span class="title">@lang('main.age') :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">18 Years</span> </li>
                            <li> <span class="title">@lang('main.nat') :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Kazakh</span> </li>
                            <li> <span class="title">@lang('main.freelance') :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Available</span> </li>
                        </ul>
                    </div>
                    <div class="col-6">
                        <ul class="about-list list-unstyled open-sans-font">
                            <li> <span class="title">@lang('main.add') :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Aktobe</span> </li>
                            <li> <span class="title">@lang('main.phone') :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">+7747 747 47 74</span> </li>
                            <li> <span class="title">@lang('main.email') :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">190103486@stu.sdu.edu.com</span> </li>
                            <li> <span class="title">@lang('main.lang') :</span> <span class="value d-block d-sm-inline-block d-lg-block d-xl-inline-block">Kazakh, English, Russian, Turkish</span> </li>
                        </ul>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="about.html" class="btn btn-download">Download CV</a>
                    </div>
                </div>
            </div>
            <!-- Personal Info Ends -->
            <!-- Boxes Starts -->
            <div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
                <div class="row">
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">3</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">@lang('main.yox') <span class="d-block"></span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats with-margin">
                            <h3 class="poppins-font position-relative">13</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">@lang('main.cp') <span class="d-block"></span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">3</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">@lang('main.hc')<span class="d-block"></span></p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="box-stats">
                            <h3 class="poppins-font position-relative">5</h3>
                            <p class="open-sans-font m-0 position-relative text-uppercase">@lang('main.aw') <span class="d-block"></span></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Boxes Ends -->
        </div>
        <hr class="separator">
        <!-- Skills Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-4 pb-sm-5 mb-3 mb-sm-0 text-left text-sm-center custom-title ft-wt-600">@lang('main.ms')</h3>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p100">
                    <span>100%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">html</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p89">
                    <span>89%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">javascript</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p90">
                    <span>90%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">css</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p45">
                    <span>45%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">php</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p95">
                    <span>95%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">wordpress</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p70">
                    <span>70%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">jquery</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p5">
                    <span>5%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">angular</h6>
            </div>
            <div class="col-6 col-md-3 mb-3 mb-sm-5">
                <div class="c100 p5">
                    <span>5%</span>
                    <div class="slice">
                        <div class="bar"></div>
                        <div class="fill"></div>
                    </div>
                </div>
                <h6 class="text-uppercase open-sans-font text-center mt-2 mt-sm-4">react</h6>
            </div>
        </div>
        <!-- Skills Ends -->
        <hr class="separator mt-1">
        <!-- Experience & Education Starts -->
        <div class="row">
            <div class="col-12">
                <h3 class="text-uppercase pb-5 mb-0 text-left text-sm-center custom-title ft-wt-600">Experience <span>&</span> Education</h3>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2019 - Present</span>
                            <h5 class="poppins-font text-uppercase">Higt school <span class="place open-sans-font">№2</span></h5>
                            <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur tempor incididunt ut labore adipisicing elit, </p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2019 - 2023</span>
                            <h5 class="poppins-font text-uppercase">IT engineer <span class="place open-sans-font">SDU</span></h5>
                            <p class="open-sans-font">Lorem incididunt dolor sit amet, consectetur eiusmod dunt doldunt dol elit, tempor incididunt</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-briefcase"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2023 - 20??</span>
                            <h5 class="poppins-font text-uppercase"> Lorem </h5><span class="place open-sans-font">DEVELOPER</span></h5>
                            <p class="open-sans-font">Lorem ipsum dolor sit amet, tempor incididunt ut laboreconsectetur elit, sed do eiusmod tempor duntt</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 m-15px-tb">
                <div class="resume-box">
                    <ul>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2025</span>
                            <h5 class="poppins-font text-uppercase">Lorem <span class="place open-sans-font">Oxford University</span></h5>
                            <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do tempor incididunt ut labore</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">201?</span>
                            <h5 class="poppins-font text-uppercase">Master Degree <span class="place open-sans-font">Oxford University</span></h5>
                            <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor incididunt ut adipisicing</p>
                        </li>
                        <li>
                            <div class="icon">
                                <i class="fa fa-graduation-cap"></i>
                            </div>
                            <span class="time open-sans-font text-uppercase">2009</span>
                            <h5 class="poppins-font text-uppercase">Bachelor Degree <span class="place open-sans-font">Top University</span></h5>
                            <p class="open-sans-font">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor ut labore</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Experience & Education Ends -->
    </div>
</section>

@endsection