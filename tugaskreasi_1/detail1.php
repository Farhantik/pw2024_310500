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
            background: wheat;
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
            <img src="data:image/jpeg;base64,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">
            <h2>Espresso</h2>
            <p>Espreso adalah jenis kopi yang dihasilkan dengan mengekstraksi biji kopi yang sudah digiling dengan menyemburkan air panas di bawah tekanan tinggi. Espresso berasal dari bahasa Italia yang berarti express atau "cepat" karena dibuat untuk disajikan dengan segera kepada pelanggan.</p>
            <b>RP.20.000</b>
            <br>
            <br>
            <button type="button" onclick="addToChart()">Add to Chart</button>
        </div>
        <br>


        <!-- <div class="footer">
            <p>Footer</p>
        </div> -->
    </div>



</body>

</html>