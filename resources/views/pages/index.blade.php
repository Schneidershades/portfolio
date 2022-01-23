@extends('layouts.app')

@section('bodyClass', 'home')

@section('headerContent')
<header class="header" id="navbar-collapse-toggle">
    <!-- Fixed Navigation Starts -->
    <ul class="icon-menu d-none d-lg-block revealator-slideup revealator-once revealator-delay1">
        <li class="icon-box active">
            <i class="fa fa-home"></i>
            <a href="/">
                <h2>Home</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-user"></i>
            <a href="/about">
                <h2>About</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-briefcase"></i>
            <a href="/portfolio">
                <h2>Portfolio</h2>
            </a>
        </li>
        <li class="icon-box">
            <i class="fa fa-envelope-open"></i>
            <a href="/contact">
                <h2>Contact</h2>
            </a>
        </li>
    </ul>
    <!-- Fixed Navigation Ends -->
    <!-- Mobile Menu Starts -->
    <nav role="navigation" class="d-block d-lg-none">
        <div id="menuToggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
            <ul class="list-unstyled" id="menu">
                <li class="active"><a href="/"><i class="fa fa-home"></i><span>Home</span></a></li>
                <li><a href="/about"><i class="fa fa-user"></i><span>About</span></a></li>
                <li><a href="/portfolio"><i class="fa fa-folder-open"></i><span>Portfolio</span></a></li>
                <li><a href="/contact"><i class="fa fa-envelope-open"></i><span>Contact</span></a></li>
            </ul>
        </div>
    </nav>
    <!-- Mobile Menu Ends -->
</header>
@endsection

@section('content')
<section class="container-fluid main-container container-home p-0 revealator-slideup revealator-once revealator-delay1">
    <div class="color-block d-none d-lg-block"></div>
    <div class="row home-details-container align-items-center">
        <div class="col-lg-4 bg position-fixed d-none d-lg-block"></div>
        <div class="col-12 col-lg-8 offset-lg-4 home-details text-left text-sm-center text-lg-left">
            <div>
                <img src='{{ URL::to("assets/img/img-mobile-me.jpg")}}' class="img-fluid main-img-mobile d-none d-sm-block d-lg-none" alt="my picture">
                <h1 class="text-uppercase poppins-font">I'm Schneider Komolafe.<span> Software Engineering Manager</span></h1>
                <p class="open-sans-font">I'm a software engineer manager focused on crafting clean & user‑friendly experiences within teams, 
                    I am passionate about building excellent software that improves the lives of those it evolves around. Contact me i am open to new opportunities</p>
                <a class="button" href="/portfolio">
                    <span class="button-text"> my portfolio</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>

                <a class="button" href="https://techpoint.africa/2021/12/22/recently-acquired-parkits-co-founders-gerald-okonkwo-schneider-komolafe-disrupted-the-autocare-industry-using-technology/">
                    <span class="button-text"> View my company's acquisition news</span>
                    <span class="button-icon fa fa-arrow-right"></span>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection