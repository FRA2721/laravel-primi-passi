<!-- dev: Francesco Cimino; -->
<!-- lang: html; -->
<!-- proj: laravel-primi-passi; -->

<!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>About page</title>
    <!-- /title -->

</head>
<!-- /head -->

<!-- body -->
<body>

    <!-- header section -->
    <header>
        <!-- content -->
        <h1>{{ $about_content }}</h1>
        <a href="{{ route('home') }}">BACK</a>
        <!-- /content -->
    </header>
    <!-- /header section -->

</body>

</html>