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
            background: url('img2.jpg') no-repeat;
            background-size: cover;
            background-position: center;
        }

        .footer {
            background-color: burlywood;
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
            margin-bottom: 10px;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
            background: #fff;
            /* border: 2px solid black; */
        }

        .content th,
        .content td {
            padding: 10px;
            border: 1px solid #333;
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

        .ndas {
            background-color: wheat;
            text-align: left;
            /* border-color: black; */
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <h2>Sidebar</h2>
        <ul>
            <li><a href="#">Beranda</a></li>
            <!-- <li><a href="detail.php">1</a></li> -->
            <li><a href="product.php">Produk</a></li>
            <li><a href="login.php">logout</a></li>
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <h1>Coffe Shop Abah</h1>
            <p>Dengan Biji Kopi pilihan</p>
        </div>
        <div class="content">
            <h2>Ini Halaman Beranda</h2>
            <p>Coffe Shop Abah adalah sebuah kedai kopi yang menawarkan pengalaman unik dengan suasana yang hangat dan ramah. Terletak di pusat kota, kedai ini menonjolkan dekorasi yang nyaman dengan dinding kayu dan lampu hias yang lembut. Menu mereka mencakup beragam kopi dari biji-biji berkualitas tinggi, serta pilihan teh dan makanan ringan yang lezat. Para pengunjung sering kali datang untuk menikmati kopi spesialitas mereka sambil menikmati suasana yang menyenangkan dan santai.</p>
            <h2>Data Produk Terbaru Kami</h2>
            <table>
                <thead class="ndas">
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Deskripsi</th>
                        <th>Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Espresso</td>
                        <td>Espreso adalah jenis kopi yang dihasilkan dengan mengekstraksi biji kopi yang sudah digiling dengan menyemburkan air panas di bawah tekanan tinggi. Espresso berasal dari bahasa Italia yang berarti express atau "cepat" karena dibuat untuk disajikan dengan segera kepada pelanggan.</td>
                        <td>RP.20.000</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Americano</td>
                        <td>Kamu pasti sudah familiar dengan kopi espresso, kan? Ya, kopi yang dibuat dengan cara diseduh dengan tekanan dan suhu tinggi yang menghasilkan ekstrak kopi yang kental. Nah, sederhananya, kopi Americano adalah espresso yang ditambahkan air panas. Soal rasa, tentunya Americano lebih ringan dibandingkan espresso.</td>
                        <td>RP25.000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="footer">
            <p>Footer</p>
        </div>
    </div>



</body>

</html>