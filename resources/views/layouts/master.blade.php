<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Laravel blog</title>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://bootswatch.com/4/litera/bootstrap.min.css" />
    <link rel="stylesheet" href="css/app.css" />
    <link rel="stylesheet" href="/css/custom.css" />
</head>

<body>
    @include ('layouts.navbar')
    <br />

    @include ('layouts.flash');

    <div class="container">
        <div class="row">
            <div class="col-8">
                <ul class="list-inline social-links">
                    <li class="list-inline-item">
                        <a href="https://twitter.com/OlivierHStA?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-count="false">Follow @OlivierHStA</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </li>
                </ul>
                @yield('content')
            </div>
            <div class="col-4">
                @include ('layouts.sidebar')
            </div>
        </div>
    </div>

    <br />


    @include ('layouts.footer')
</body>

</html>
