<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : SimpleWork
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140225

-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
    <link href="/css/default.css" rel="stylesheet" />
    <link href="/css/fonts.css" rel="stylesheet" />
    <link href="/css/app.css" rel="stylesheet">

    @yield('head')
</head>

<body>
    <div id="header-wrapper">
        <div id="header" class="container">
            <div id="logo">
                <h1><a href="/">Laravel*Overflow</a></h1>
            </div>
            <div id="menu">
                <ul>
                    <li class="{{ Request::path() === "/" ? "current_page_item" : "" }}"><a href="/" accesskey="1"
                            title="">Homepage</a></li>
                    <li class="{{ Request::path() === "questions" ? "current_page_item" : "" }}"><a href="/questions"
                            accesskey="4" title="">Questions</a></li>
                    <li class="{{ Request::path() === "contact" ? "current_page_item" : "" }}"><a href="/" accesskey="5"
                            title="">Contact Me</a></li>
                    <li class="{{ Request::path() === "login" ? "current_page_item" : "" }}"><a href="/" accesskey="6"
                            title="">Log in</a></li>
                </ul>
            </div>
        </div>
        @yield("header")
    </div>

    @yield('content')
    <div id="copyright" class="container">
        <p>
            &copy; Niina Järvinen. All rights reserved. | Photos by
            <a href="https://unsplash.com/">Unsplash</a> | Design by
            <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.
        </p>
    </div>


</body>

</html>
