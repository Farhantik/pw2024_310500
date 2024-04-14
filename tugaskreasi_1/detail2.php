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
            <div class="content" id="2">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSarlfZTrYygQ2jt9ChmXSmvbfnNYhb2rjSVA&usqp=CAU">
                <h2>Americano</h2>
                <p>Kamu pasti sudah familiar dengan kopi espresso, kan? Ya, kopi yang dibuat dengan cara diseduh dengan tekanan dan suhu tinggi yang menghasilkan ekstrak kopi yang kental. Nah, sederhananya, kopi Americano adalah espresso yang ditambahkan air panas. Soal rasa, tentunya Americano lebih ringan dibandingkan espresso.

                    Menurut cerita, kopi Americano ini hadir berkat para tentara Amerika yang datang ke Italia. Kala itu, kopi espresso terasa kurang familiar dan terlalu pahit bagi mereka. Oleh karena itu, untuk membuatnya pas di lidah dengan mudah, para tentara menambahkan air ke dalam kopi espresso-nya. Singkat cerita, kopi Americano jadi minuman yang mendunia, tidak hanya di Amerika saja.</p>
                <b>RP25.00</b>
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