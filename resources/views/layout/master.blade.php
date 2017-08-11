<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/united/bootstrap.min.css">
    <title>@yield('title')</title>
    <style>
        footer {
            color: white;
            x font-size: 18px;
            background-color: grey;
            padding-top: 8px;
            height: 35px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src=" http://codelab.camp/logo.jpg" style="width:40px;margin-top:-10px;" class="img-responsive"
                     alt="Responsive image">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="@yield('Day1')"><a href="/">Day1 <span class="sr-only">(current)</span></a></li>
                <li class="dropdown @yield('Day2')">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Day 2 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="@yield('Day2')"><a href="/day201">Home Work 1</a></li>
                        <li class="@yield('Day22')"><a href="day202.html">Home Work 2</a></li>
                    </ul>
                </li>
                <li class="@yield('Day3')"><a href="day301.html">Day3</a></li>
                <li class="@yield('Day4')"><a href="#">Day4</a></li>

                <li class="@yield('videos')"><a href="/videos">Videos</a></li>
                <li class="@yield('about')"><a href="/about">About Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown @yield('signup') @yield('signin')">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="@yield('signup')"><a href="/signup">Signup</a></li>
                        <li class="@yield('signin')"><a href="/signin">Sign in</a></li>
                        <li><a href="#">Sign out</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

@yield('content')

<footer class="container-fluid text-center navbar-fixed-bottom" style="font-size: 22px;padding-bottom: 40px">
    &copy; {{date("Y")}} By:Mohamed Al-Oraibi
</footer>
@yield('warning')

<script src="https://unpkg.com/vue@2.4.2"></script>
{{--<script>--}}
{{--var vm = new Vue({--}}
{{--el: "#root",--}}
{{--data: {--}}
{{--messages: []--}}
{{--},--}}
{{--mounted: function () {--}}
{{--this.getMessages();--}}
{{--},--}}
{{--methods: {--}}
{{--getMessages() {--}}
{{--$.ajax({--}}
{{--url: 'http://api.codelab.camp/messages',--}}
{{--type: "GET", /* or type:"GET" or type:"PUT" */--}}
{{--dataType: "json",--}}
{{--success: function (result) {--}}
{{--vm.messages = result;--}}
{{--console.log(result);--}}
{{--},--}}
{{--error: function () {--}}
{{--console.log("error");--}}
{{--}--}}
{{--});--}}
{{--}--}}
{{--}--}}
{{--})--}}

{{--</script>--}}
<script
        src="https://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>
</html>