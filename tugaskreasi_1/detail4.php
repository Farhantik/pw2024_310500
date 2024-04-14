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
            <div class="content" id="4">
                <img src="data:image/jpeg;base64,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">
                <h2>Frappuccino</h2>
                <p>Frappuccino adalah lakuran dari frappé dan cappuccino, kopi espresso dengan susu buih. Tidak jelas apakah frappé diambil dari frappé, kopi es Yunani, atau dari istilah Boston untuk susu kocok kental frappé (diucapkan "frap"). Pastinya kedua kata tersebut berasal dari bahasa Prancis frappé. Minuman Frappuccino asli dikembangkan, diberi nama dan merek dagang, dan dijual oleh jaringan kedai kopi milik George Howell di Massachusetts Timur, The Coffee Connection. Ketika Starbucks membeli The Coffee Connection pada tahun 1994, mereka juga memperoleh hak memakai, membuat, memasarkan, dan menjual minuman Frappuccino.</p>
                <b>RP25.000</b>
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