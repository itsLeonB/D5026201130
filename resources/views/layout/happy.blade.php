<!DOCTYPE html>
<html>

<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    <style>
        #header {
            color: whitesmoke;
            background-color: #202020;
        }

        #home {
            padding-left: 12%;
        }

        #navmenu {
            color: whitesmoke;
            background-color: #202020;
            min-height: calc(100vh - 50px);
        }

        #navmenu a {
            text-decoration: none;
            color: whitesmoke;
        }

        footer {
            color: whitesmoke;
            background-color: #202020;
            bottom: 1%;
            /* position: fixed; */
        }

    </style>
</head>

<body>
    <header>
        <div class="container-fluid" id="header">
            <div class="row">
                <div class="col-sm-1">
                    <img src="/img/leon.jpg" id="pasfoto" class="img-responsive">
                </div>
                <div class="col-sm-11">
                    <h1 id="titlename">5026201130 - Ellion Blessan</h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2" id="navmenu">
                <h3>Navigation</h3>
                <h4 id="home"><a href="/">Home</a></h4>
                <ul>
                    <li><a href="/pegawai">Pegawai</a></li>
                    <li><a href="/absen">Absen</a></li>
                    <li><a href="/tugas">Tugas</a></li>
                    <li><a href="/minggudepan">Minggu depan</a></li>
                    <li><a href="/praktikum">Praktikum</a></li>
                </ul>
            </div>
            <div class="col-sm-10">
                <h4>
                    <br>
                    @yield('judulhalaman')
                </h4>
                @section('konten')
                @show
            </div>
        </div>
    </div>

    <footer>
        <div class="container-fluid" id="footer">
            <div class="row">
                <div class="col-sm-12">
                    Hak Cipta oleh 5026201130 - Ellion Blessan
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
