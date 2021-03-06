<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ellion Blessan</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    5026201130<br>Ellion Blessan
                </div>

                <div class="links">
                    <a href="tugas_1.html">Tugas 1</a>
                    <a href="tugas_2.html">Tugas 2</a>
                    <a href="tugas_3.html">Tugas 3</a>
                    <a href="praktikum_1.html">Praktikum 1</a>
                    <a href="tugasjs">Tugas JS</a>
                    <a href="tugas4">Tugas 4</a>
                    <a href="praktikum2">Praktikum 2</a>
                    <a href="ets2021">ETS</a>
                    <a href="tugasphp">Tugas PHP</a>
                </div>
                <br>
                <div class="links">
                    <a href="/pegawai">Pegawai</a>
                    <a href="/absen">Absen</a>
                    <a href="/tugas">Tugas</a>
                    <a href="/beras">Beras</a>
                </div>
            </div>
        </div>
    </body>
</html>
