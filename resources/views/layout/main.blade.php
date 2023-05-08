<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing Page</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>

</head>

<body id="page-top">
    <style type="text/css">
        .navbar {
            background-color: #FFD93D;
            padding-right: 20px;
        }

        .navbar-brand {
            font-size: 50px;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            padding-right: 40px;
            padding-left: 30px
        }

        .nav-item {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 20px;
        }

        .page-section {
            margin-top: 100px;
            padding-top: 40px;
        }

        footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #FFD93D;
            color: white;
            text-align: center;
            padding: 1rem 0;
        }
    </style>
    @yield('container')
    <footer>
        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
    </footer>
</body>

</html>
