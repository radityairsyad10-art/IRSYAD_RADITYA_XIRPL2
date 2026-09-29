<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Laundry Kita</title>

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">

    <script type="text/javascript" src="assets/js/jquery.js"></script>

    <script type="text/javascript" src="assets/js/bootstrap.js"></script>


    <style>

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f8fa;
            color: #263746;
        }


        /* =========================
           NAVBAR
        ========================= */

        .navbar-laundry {

            position: absolute;

            top: 0;
            left: 0;

            width: 100%;

            height: 75px;

            display: flex;

            align-items: center;

            justify-content: space-between;

            padding: 0 7%;

            z-index: 10;

            background: rgba(8, 37, 56, 0.35);

        }


        .logo {

            color: white;

            font-size: 25px;

            font-weight: bold;

            text-decoration: none;

        }


        .logo span {

            color: #5dd6ff;

        }


        .logo:hover {

            color: white;

            text-decoration: none;

        }


        .menu {

            display: flex;

            align-items: center;

            gap: 30px;

        }


        .menu a {

            color: white;

            text-decoration: none;

            font-size: 15px;

            font-weight: bold;

            transition: 0.3s;

        }


        .menu a:hover {

            color: #5dd6ff;

        }


        /* TOMBOL LOGIN */

        .menu .login {

            background: #5dd6ff;

            color: #12384d;

            padding: 10px 22px;

            border-radius: 25px;

        }


        .menu .login:hover {

            background: white;

            color: #12384d;

        }



        /* =========================
           LANDING / HERO
        ========================= */

        .hero {

            height: 650px;

            position: relative;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            color: white;

            overflow: hidden;


            background:

                linear-gradient(
                    rgba(8, 37, 56, 0.55),
                    rgba(8, 37, 56, 0.70)
                ),

                url("assets/img/laundry.jpg");


            background-size: cover;

            background-position: center;

        }


        .hero-content {

            max-width: 800px;

            padding: 20px;

        }


        .hero-content h1 {

            font-size: 60px;

            font-weight: bold;

            margin-bottom: 15px;

        }


        .hero-content h1 span {

            color: #5dd6ff;

        }


        .hero-content p {

            font-size: 20px;

            line-height: 1.7;

            margin-bottom: 30px;

        }


        .btn-layanan {

            display: inline-block;

            padding: 13px 30px;

            border-radius: 30px;

            background: #5dd6ff;

            color: #12384d;

            font-weight: bold;

            text-decoration: none;

        }


        .btn-layanan:hover {

            background: white;

            color: #12384d;

            text-decoration: none;

        }



        /* =========================
           LENGKUNGAN
        ========================= */

        .hero::after {

            content: "";

            position: absolute;

            bottom: -90px;

            left: -5%;

            width: 110%;

            height: 140px;

            background: #f5f8fa;

            border-radius: 50% 50% 0 0;

        }



        /* =========================
           LAYANAN
        ========================= */

        .layanan {

            padding: 70px 7%;

            text-align: center;

        }


        .judul {

            font-size: 35px;

            font-weight: bold;

            color: #173b57;

        }


        .garis {

            width: 70px;

            height: 4px;

            background: #5dd6ff;

            margin: 15px auto 45px;

            border-radius: 5px;

        }


        .card-layanan {

            background: white;

            padding: 30px 20px;

            margin-bottom: 25px;

            min-height: 210px;

            border-radius: 15px;

            box-shadow: 0 5px 20px rgba(0,0,0,0.08);

            transition: 0.3s;

        }


        .card-layanan:hover {

            transform: translateY(-7px);

        }


        .icon {

            font-size: 45px;

            margin-bottom: 15px;

        }


        .card-layanan h3 {

            color: #173b57;

            font-weight: bold;

            font-size: 21px;

        }


        .card-layanan p {

            color: #777;

            line-height: 1.6;

        }



        /* =========================
           TENTANG
        ========================= */

        .tentang {

            padding: 70px 10%;

            text-align: center;

            background: #eaf6fa;

        }


        .tentang p {

            max-width: 800px;

            margin: auto;

            color: #555;

            line-height: 1.8;

        }



        /* =========================
           LOGIN AREA
        ========================= */

        .login-area {

            padding: 65px 20px;

            text-align: center;

            background: #173b57;

            color: white;

        }


        .login-area h2 {

            font-size: 32px;

            font-weight: bold;

        }


        .login-area a {

            display: inline-block;

            margin-top: 15px;

            padding: 12px 30px;

            border-radius: 25px;

            background: #5dd6ff;

            color: #12384d;

            font-weight: bold;

            text-decoration: none;

        }


        .login-area a:hover {

            background: white;

            text-decoration: none;

        }



        /* =========================
           FOOTER
        ========================= */

        footer {

            background: #0c2738;

            color: white;

            text-align: center;

            padding: 20px;

        }


        footer p {

            margin: 0;

        }



        /* =========================
           RESPONSIVE
        ========================= */

        @media(max-width: 768px) {

            .menu {

                gap: 10px;

            }

            .menu a {

                font-size: 12px;

            }

            .hero-content h1 {

                font-size: 40px;

            }

            .hero-content p {

                font-size: 16px;

            }

        }

    </style>

</head>


<body>


<!-- =========================
     NAVBAR
========================= -->

<nav class="navbar-laundry">


    <a href="#beranda" class="logo">

        LAUNDRY<span>KITA</span>

    </a>


    <div class="menu">


        <a href="#beranda">

            Beranda

        </a>


        <a href="#layanan">

            Layanan

        </a>


        <a href="#tentang">

            Tentang

        </a>


        <!-- TOMBOL LOGIN -->

        <a href="../loundry/index.php" class="login">

            Login

        </a>


    </div>


</nav>



<!-- =========================
     HERO
========================= -->

<section class="hero" id="beranda">


    <div class="hero-content">


        <h1>

            LAUNDRY <span>KITA</span>

        </h1>


        <p>

            Solusi laundry cepat, bersih,
            wangi dan terpercaya.

        </p>


        <a href="#layanan" class="btn-layanan">

            LIHAT LAYANAN

        </a>


    </div>


</section>



<!-- =========================
     LAYANAN
========================= -->

<section class="layanan" id="layanan">


    <h2 class="judul">

        Layanan Kami

    </h2>


    <div class="garis"></div>


    <div class="container">


        <div class="row">


            <div class="col-md-4">


                <div class="card-layanan">


                    <div class="icon">

                        👕


                    </div>


                    <h3>

                        Cuci & Kering

                    </h3>


                    <p>

                        Pakaian dicuci dan dikeringkan
                        dengan bersih dan rapi.

                    </p>


                </div>


            </div>



            <div class="col-md-4">


                <div class="card-layanan">


                    <div class="icon">

                        ✨

                    </div>


                    <h3>

                        Cuci Setrika

                    </h3>


                    <p>

                        Pakaian dicuci, wangi
                        dan disetrika sampai rapi.

                    </p>


                </div>


            </div>



            <div class="col-md-4">


                <div class="card-layanan">


                    <div class="icon">

                        🧺

                    </div>


                    <h3>

                        Laundry Kiloan

                    </h3>


                    <p>

                        Solusi praktis untuk mencuci
                        pakaian dalam jumlah banyak.

                    </p>


                </div>


            </div>


        </div>


    </div>


</section>



<!-- =========================
     TENTANG
========================= -->

<section class="tentang" id="tentang">


    <h2 class="judul">

        Tentang Laundry Kita

    </h2>


    <div class="garis"></div>


    <p>

        Laundry Kita adalah sistem informasi laundry
        yang membantu mengelola data pelanggan,
        transaksi dan laporan laundry dengan lebih
        mudah dan terorganisir.

    </p>


</section>



<!-- =========================
     LOGIN
========================= -->

<section class="login-area">


    <h2>

        Login Admin

    </h2>


    <p>

        Masuk ke sistem untuk mengelola data laundry.

    </p>


    <a href="admin/login.php">

        LOGIN ADMIN

    </a>


</section>



<!-- =========================
     FOOTER
========================= -->

<footer>

    <p>

        © 2026 Laundry Kita

    </p>

</footer>


</body>

</html>