<!-- dev: Francesco Cimino; -->
<!-- lang: html; -->
<!-- proj: laravel-primi-passi; -->

<!DOCTYPE html>
<html lang="en">

<!-- head -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- title -->
    <title>LARAVEL</title>
    <!-- /title -->

</head>
<!-- /head -->

<!-- body -->
<body>

    <!-- header section -->
    <header>
        <!-- links list -->
        <ul>
            <!-- dynamic links section -->
            @foreach ($links as $link)
                <li>
                    <a href="{{ route($link['href']) }}"> {{ $link['text'] }} </a>
                </li>
            @endforeach
            <!-- /dynakic link section -->
        </ul>
        <!-- /links list -->
    </header>
    <!-- /header section -->

    <!-- main section -->
    <main>
        <h1>{{ $home_content }}</h1>
    </main>
    <!-- /main section -->

</body>
<!-- /body -->

</html>