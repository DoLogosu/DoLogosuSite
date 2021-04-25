<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1, minimum-scale=1">
    <title>@yield('title')</title>
    <style>
        body::-webkit-scrollbar
        {
            display: none;
        }
        @media (max-width: 768px)
        {
            .md-right
            {
                float: right;
                padding: 0px 0px;
                right: -10px;

                font-weight: bold;
            }
        }
        @media (min-width: 768px)
        {
            .md-normal
            {
padding: 0;
                left: -6px;
                font-weight: bold;
            }
        }
        @media (max-width: 768px)
        {
            .col-md-0
            {
                visibility: hidden;
                display: none;
            }
        }
        @media  (min-width: 0px) {
            .head-xxxs {
                padding-top: 105%;
                height: auto;
            }
        }
        @media  (min-width: 300px) {
            .head-xxs {
                padding-top: 90%;
                height: auto;
            }
        }
        @media (min-width: 370px) {
            .head-xs {
                padding-top: 80%;
                height: auto;
            }
        }
        @media (min-width: 410px) {
            .head-s {
                padding-top: 70%;
                height: auto;
            }
        }
        @media (min-width: 460px) {
            .head-m {
                padding-top: 65%;
                height: auto;
            }
        }
        @media (min-width: 510px) {
            .head-l {
                padding-top: 55%;
                height: auto;
            }
        }
        @media (min-width: 600px) {
            .head-xl {
                padding-top: 50%;
                height: auto;
            }
        }
        @media (min-width: 667px) {
            .head-xxl {
                height: 300px;
                padding-top: 0;

            }
        }
        .news-bock:hover{
            transition: 0.3s;
            z-index: 999;
            transform: scale(1.02);
            text-decoration-line: underline;
        }
        .news-bock p{
            font-weight: lighter;
            font-size: 1.5em;
        }
        .news-bock h5{
            font-weight: lighter;
        }

        @media (min-width: 540px) {
            .news-bock p {
                font-size: 1.8em;
            }
        }
        @media (min-width: 720px) {
            .news-bock p {
                font-size: 1.3em;
            }
        }
        @media (min-width: 960px) {
            .news-bock p {
                font-size: 1.8em;
            }
        }
        @media (min-width: 1140px) {
            .news-bock p {
                font-size: 2em;
            }
        }
    </style>
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--Summertone-->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

</head>
<body class="bg-light">
        @include('layouts._navbar')
        @yield('content')
        @include('layouts._footer')
</div>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
