<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=0,maximum-scale=10,user-scalable=yes,viewport-fit=cover">
    <meta name="format-detection" content="telephone=no, address=no, email=no">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="Author" content="APKASS 2026">
    <meta name="Keywords" content="APKASS 2026">
    <meta name="description" content="APKASS 2026">
    <title>APKASS 2026</title>
    <link rel="icon" href="/assets/image/favicon.ico">
    <link rel="stylesheet" href="/assets/css/slick.css">
    <link rel="stylesheet" href="/assets/css/common.css">
    <link rel="stylesheet" href="/assets/css/jquery-ui.min.css">
    <script src="/assets/js/jquery-3.7.1.min.js"></script>
    <script src="/assets/js/jquery-ui.min.js"></script>
    <script src="/assets/js/slick.min.js"></script>
    <script src="/assets/js/jquery.rwdImageMaps.js"></script>
    <script src="/assets/js/common.js"></script>
</head>
<body>
    <!-- 
        main일 때 calss="main"
        sub일 때 class="sub"
    -->
    <div class="wrap sub">
        <!-- header -->
        <div id="dim" class="js-dim"></div>
        <header id="header" class="js-header">
            <div class="header-wrap inner-layer">
                
                <h1 class="header-logo">
                    <a href="#n">헤더 로고</a>
                </h1>
                <div class="util-wrap">
                    <div class="dday-wrap type-w">
                        <div class="dday-inner">
                            <img src="/assets/image/common/bell.svg" alt="">
                            <div class="text-wrap">
                                <p class="dday">D - 000</p>
                                <p class="today">Today, YYYY-MM-DD</p>
                            </div>
                        </div>
                    </div>
                    <ul class="util-menu">
                        <li><a href="#n"><img src="/assets/image/common/ic_home.svg" alt="">HOME</a></li>
                        <li><a href="#n"><img src="/assets/image/common/ic_signup.svg" alt="">SIGN-UP</a></li>
                        <li><a href="#n"><img src="/assets/image/common/ic_login.svg" alt="">LOGIN</a></li>
                        <li><a href="#n" class="admin"><img src="/assets/image/common/ic_admin.svg" alt="">ADMIN</a></li>
                    </ul>
                </div>
                <button type="button" class="btn btn-menu-open js-btn-menu-open">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </button>
            </div>
            <nav id="gnb">
                <div class="m-gnb-header">
                    <div class="dday-wrap type-m">
                        <div class="dday-inner">
                            <img src="/assets/image/common/bell.svg" alt="">
                            <div class="text-wrap">
                                <p class="dday">D - 000</p>
                                <p class="today">Today YYYY-MM-DD</p>
                            </div>
                        </div>
                    </div>
                    <ul class="util-menu">
                        <li><a href="#n"><img src="/assets/image/common/ic_home.svg" alt="">HOME</a></li>
                        <li><a href="#n"><img src="/assets/image/common/ic_signup.svg" alt="">SIGN-UP</a></li>
                        <li><a href="#n"><img src="/assets/image/common/ic_login.svg" alt="">LOGIN</a></li>
                        <li><a href="#n" class="admin"><img src="/assets/image/common/ic_admin_w.svg" alt="">ADMIN</a></li>
                    </ul>
                </div>
                <div class="gnb-wrap inner-layer">
                    <ul class="gnb js-gnb">
                        <li>
                            <a href="#n">ABOUT</a>
                            <ul>
                                <li><a href="#">Welcome Message</a></li>
                                <li><a href="#">Committee</a></li>
                                <li><a href="#">Overview</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">News & Notice</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#n">PROGRAM</a>
                            <ul>
                                <li><a href="#">Program at a Glance</a></li>
                                <li><a href="#">Scientific Program</a></li>
                                <li><a href="#">Invited Speakers</a></li>
                                <li><a href="#">Networking Events</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#n">ABSTRACT</a>
                            <ul>
                                <li><a href="#">Abstract Submission</a></li>
                                <li><a href="#">Awards</a></li>
                                <li><a href="#">Presentation Guidelines</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#n">REGISTRATION</a>
                            <ul>
                                <li><a href="#">Registration Guideline</a></li>
                                <li><a href="#">Online Registration</a></li>
                                <li><a href="#">Visa</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#n">ACCOMMODATION</a>
                            <ul>
                                <li><a href="#">Accommodation</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#n">SPONSORSHIP</a>
                            <ul>
                                <li><a href="#">Sponsorship Opportunities</a></li>
                                <li><a href="#">Our Sponsors</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#n">INFORMATION</a>
                            <ul>
                                <li><a href="#">Venue</a></li>
                                <li><a href="#">Transportation</a></li>
                                <li><a href="#">Tour Information</a></li>
                                <li><a href="#">Useful Information</a></li>
                                <li><a href="#">About Incheon</a></li>
                                <li><a href="#">About Korea</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <button type="button" class="btn btn-menu-close js-btn-menu-close"><span class="hide">메뉴 닫기</span></button>
            </nav>
        </header>
        <!-- //header -->