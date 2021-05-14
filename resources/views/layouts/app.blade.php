<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.head')
</head>

<body class="@yield('bodyClass')">
<!-- Live Style Switcher Starts - demo only -->
<!-- <div id="switcher" class="">
    <div class="content-switcher">
        <h4>STYLE SWITCHER</h4>
        <ul>
            <li>
                <a href="#" onclick="setActiveStyleSheet('purple');" title="purple" class="color"><img src='{{ URL::to("assets/img/styleswitcher/purple.png")}}' alt="purple"></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('red');" title="red" class="color"><img src='{{ URL::to("assets/img/styleswitcher/red.png")}}' alt="red"></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blueviolet');" title="blueviolet" class="color"><img src='{{ URL::to("assets/img/styleswitcher/blueviolet.png")}}' alt="blueviolet"></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('blue');" title="blue" class="color"><img src='{{ URL::to("assets/img/styleswitcher/blue.png")}}' alt="blue"></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('goldenrod');" title="goldenrod" class="color"><img src='{{ URL::to("assets/img/styleswitcher/goldenrod.png")}}' alt="goldenrod"></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('magenta');" title="magenta" class="color"><img src='{{ URL::to("assets/img/styleswitcher/magenta.png")}}' alt="magenta"></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellowgreen');" title="yellowgreen" class="color"><img src='{{ URL::to("assets/img/styleswitcher/yellowgreen.png")}}' alt="yellowgreen"></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('orange');" title="orange" class="color"><img src='{{ URL::to("assets/img/styleswitcher/orange.png")}}' alt="orange"></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('green');" title="green" class="color"><img src='{{ URL::to("assets/img/styleswitcher/green.png")}}' alt="green"></a>
            </li>
            <li>
                <a href="#" onclick="setActiveStyleSheet('yellow');" title="yellow" class="color"><img src='{{ URL::to("assets/img/styleswitcher/yellow.png")}}' alt="yellow"></a>
            </li>
        </ul>
    </div>
</div>
<div id="showSwitcher" class="styleSecondColor"><i class="fa fa-cog fa-spin"></i></div> -->
<!-- Live Style Switcher Ends - demo only -->
<!-- Header Starts -->
@yield('headerContent')
<!-- Header Ends -->

@yield('pageTitle')
<!-- Main Content Starts -->
@yield('content')
<!-- Main Content Ends -->

<!-- Template JS Files -->

@include('partials.scripts')

</body>

</html>
