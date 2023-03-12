<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title-block')</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


</head>

<body>




    <div class="container">
        <div class="row">
            <div class="col-8">
                @yield ('content')




            </div>


            <div class="container mt-5">

                @include('includes.messages')
                @yield('about')
            </div>

        </div>
    </div>

</body>

</html>