<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PUSKRIP</title>
    <style type="text/css">
        body {
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
            background: url('img5.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 0px;
            text-align: center;
            position: fixed;
            bottom: 0;
            left: 0;
            width: calc(100% - -100px);
            box-sizing: border-box;
        }

        .sidebar {
            background-color: bisque;
            color: #333;
            width: 200px;
            height: 100%;
            position: fixed;
            top: 0;
            left: 0;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar h2 {
            position: relative;
            top: 90px;
            font-size: 30px;
            left: 15px;

        }

        .sidebar li {
            padding: 10px;
            line-height: 30px
        }

        .sidebar a {
            position: relative;
            top: 90px;
            left: 35px;
            color: #333;
            text-decoration: none;
            padding: 10px;
            /* border-bottom: 1px solid #444; */
            line-height: 30px
        }

        .container {
            margin-left: 200px;
            padding: 20px;
            max-height: 100px;
        }


        .header {
            background-color: burlywood;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            top: 0;
            left: 0;
            width: calc(100% - -100px);
            box-sizing: border-box;
        }

        .header h1 {
            margin: 0;
            font-size: 36px;
        }

        .header p {
            margin: 0;
            font-size: 18px;
        }

        .content {
            margin-top: 80px;
            padding: 20px;
        }

        .content h2 {
            margin-top: 0;
            margin-bottom: 0;

        }

        .content p {
            font-size: 16px;
        }

        .sidebar a {
            padding: 10px;
        }

        .sidebar li:last-child a {
            border-bottom: none;
        }

        .sidebar a:hover {
            background-color: #444;
        }

        .sidebar h3 {
            margin: 0;
            padding: 10px;
            font-size: 24px;
            font-weight: normal;
            border-bottom: 1px solid #444;
        }

        .sidebar ul {
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            padding: 0;
            margin: 0;
        }

        .sidebar li:last-child {
            border-bottom: none;
        }

        .sidebar a:hover {
            text-decoration: none;
        }

        .sidebar a:focus {
            outline: none;
        }

        .content[id="3"] img {
            max-width: 23%;
            max-height: auto;
        }

        .content[id="4"] img {
            max-width: 23%;
            max-height: auto;
            padding: 45px 25px 15px 26px;
        }

        .content[id="5"] img {
            max-width: 23%;
            max-height: auto;
            padding: 69px 25px 70px 26px;
            margin: -16px 21px -40px 2px;
            /* position: absolute;
            top: 0px;
            left: 40px;
            z-index: 1; */

        }

        .content:target {
            scroll-margin-top: 350px;
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="index.php">Beranda</a></li>
            <li><a href="product.php">Produk</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <h1>Coffe Shop Abah</h1>
            <p>Dengan Biji Kopi pilihan</p>
        </div>
        <div class="content">
            <h2>Ini Halaman Detail Produk</h2>
            <br>
            <div class="content" id="5">
                <img src="data:image/jpeg;base64,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">
                <h2>Long black coffee</h2>
                <p>Long black adalah salah satu jenis kopi yang umumnya tersedia di Australia dan Selandia Baru. Long black mirip dengan americano, tetapi memiliki aroma dan cita rasa yang lebih kuat. Secangkir long black dibuat dengan menuangkan dua seloki espreso atau ristreto ke atas air panas. </p>
                <b>RP25.000</b>
                <br>
                <br>
                <button type="button" onclick="addToChart()">Add to Chart</button>
            </div>
            <!-- <div class="footer">
            <p>Footer</p>
        </div> -->
        </div>



</body>

</html>