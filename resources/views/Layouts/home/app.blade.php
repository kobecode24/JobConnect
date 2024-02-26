<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobConnect Plateform</title>
    <link rel="stylesheet" href="{{ mix('resources/css/style.css') }}" />
</head>
<body>

    <!------------------------ header ---------------------------->
    @include('layouts.home.header')

    <div class="container">
        <!------------------------ left side ---------------------------->
        @include('layouts.home.left-side')

        <!------------------------ main side ---------------------------->
        @yield('contents')

        <!------------------------ right side ---------------------------->
        @include('layouts.home.right-side')
    </div>

    <script src="{{ mix('resources/js/file.js') }}"></script>
</body>
</html>
