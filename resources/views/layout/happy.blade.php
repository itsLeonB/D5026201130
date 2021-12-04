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
    <script src="https://kit.fontawesome.com/39f03edc73.js" crossorigin="anonymous"></script>
    <style>
        #header {
            color: whitesmoke;
            background-color: #202020;
        }

        #navmenu h4 {
            padding-left: 4%;
        }

        #navmenu h5 {
            padding-left: 8%;
        }

        #navmenu {
            color: whitesmoke;
            background-color: #202020;
            min-height: calc(100vh - 50px);
            width: 10%;
        }

        #navbutton {
            color: whitesmoke;
            background-color: #202020;
            min-height: calc(100vh - 50px);
            width: 1%;
            display: table;
            overflow: hidden;
        }

        #navbutton i {
            margin: -10px;
        }

        #navbutton div {
            display: table-cell;
            vertical-align: middle;
        }

        #navmenu a {
            text-decoration: none;
            color: whitesmoke;
            transition-duration: 1s;
        }

        #navmenu a:hover {
            text-decoration: none;
            color: #428bca;
        }

        footer {
            color: whitesmoke;
            background-color: #202020;
            bottom: 1%;
            text-align: right;
            padding: 1%;
        }

        table,
        form {
            margin-top: 1%;
        }

        #cell-opsi {
            text-align: center;
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
                <h4><a href="/"><i class="fas fa-home"></i> Home</a></h4>
                <h5><a href="/pegawai"><i class="fas fa-user"></i> Pegawai</a></h5>
                <h5><a href="/absen"><i class="fas fa-calendar-week"></i> Absen</a></h5>
                <h5><a href="/tugas"><i class="fas fa-tasks"></i> Tugas</a></h5>
                <h5><a href="/minggudepan">Minggu depan</a></h5>
                <h5><a href="/praktikum">Praktikum</a></h5>
            </div>
            <div class="col-sm-1" id="navbutton">
                <div>
                    <h2 id="icon"><i class="fas fa-chevron-left"></i></h2>
                </div>
            </div>
            <script>
                var i = 0;
                $("#navbutton").click(function() {

                    $("#navmenu").animate({
                        width: 'toggle'
                    }, 250);
                });
                $("#navbutton").click(function() {
                    if (i % 2 === 1) {
                        $('#icon').fadeOut(250, function() {
                            $(this).html('<i class="fas fa-chevron-left">').fadeIn(500);
                        });
                    } else {
                        $('#icon').fadeOut(250, function() {
                            $(this).html('<i class="fas fa-chevron-right"></i>').fadeIn(500);
                        });
                    }
                    i++;
                });
            </script>
            <div class="col-sm-9">
                <h3>
                    @yield('judulhalaman')
                </h3>
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
