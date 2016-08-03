<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Styles -->
        <link href="/css/app.css" rel="stylesheet">


    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Login</a>
                    {{-- <a href="{{ url('/register') }}">Register</a> --}}
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    BudgetMe
                </div>

            </div>
        </div>
    </body>
</html>
