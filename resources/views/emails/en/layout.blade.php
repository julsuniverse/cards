<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        h1, h2, h3, h4, h5, p, span, a, li {
            font-family: "Arial", sans-serif;
        }
        h1 {
            margin: 16px 0;
        }
        ul {
            padding: 0;
        }
        p, span, li {
            color: #000 !important;
        }
        p, span, li, a {
            font-size: 16px;
        }
        body {
            margin: 0;
        }
        a {
            text-decoration: none;
        }
        .content {
            background-color: #fff;
            border-radius: 10px;
            display: block;
            width: 100%;
            max-width: 90%;
            margin: auto;
            box-sizing: border-box;
        }
        footer {
            text-align: center;
            background-color: #e9ecef;
            color: #999;
            padding: 20px;
            border-top: 1px solid #999;
            margin-top: 20px;
        }
        header {
            text-align: center;
            background-color: #e9ecef;
            padding: 20px;
            border-bottom: 1px solid #999;
            margin-bottom: 20px;
        }
        header a {
            color: #999;
            font-weight: bold;
            font-size: 22px;
        }
        header a:hover {
            color: #999;
            text-decoration: none;
        }
        .email-btn {
            background-color: #bb1919;
            border: 1px solid #9a1717;
            color: #fff !important;
            padding: 10px;
            border-radius: 7px;
            margin-top: 15px;
            margin-bottom: 15px;
            text-decoration: none;
        }
        .email-btn:hover {
            color: #fff;
            text-decoration: none;
        }
    </style>

    @yield('assets')

    <link rel="stylesheet"
          href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay"
          crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
</head>
<body>
<div class="container">
    <header>
        <a href="{{ env('APP_URL') }}">Light of TAROT</a>
    </header>

    @yield('content')

    <footer>
        <p>&copy; {{ date('Y') }} Light of TAROT. All rights reserved. </p>
    </footer>
</div>
</body>
