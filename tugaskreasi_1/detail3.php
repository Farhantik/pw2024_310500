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
            <div class="content" id="3">
                <img src="data:image/jpeg;base64,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">
                <h2>Latte</h2>
                <p>Latte atau caffè latte adalah kopi susu yang memiliki lapisan busa halus sebagai highlight minumannya. Latte asli terdiri dari satu atau dua gelas espresso , susu kukus, dan lapisan terakhir susu berbusa tipis di atasnya. Gabungan elemen-elemen ini menghasilkan kopi susu seimbang yang memiliki tampilan estetis dan tekstur halus.</p>
                <b>RP30.000</b>
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