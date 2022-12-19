<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">


        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        @include('default-navigation')

        <h3>employees: </h3>
        @foreach ($employees as $employee)
            <p>
                Employee name: <b>{{ $employee->name }}</b>
                <br>
                Employee parking position: <b>{{ $employee->parking->position }}</b>
            </p>
        @endforeach
    </body>
</html>