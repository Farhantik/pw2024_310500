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
            <br>
            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxAPDw8QDw8PDw8PDw8PEA8VDw8PDw8PFREXFhURFxUYHSogGBolGxUVITEhJSkrLi4uFx8zODMsNygtLisBCgoKDg0OGhAQFy0iHyUtLS0tKy0uLSstLS0tLS0tLS0tLS0tLS0wLS0tLS0tLS0tLSstKy0tLS0tLS0tLS0tLf/AABEIAMIBAwMBIgACEQEDEQH/xAAcAAACAgMBAQAAAAAAAAAAAAAAAQIDBAUGBwj/xABEEAACAQIFAQUEBgUKBwEAAAAAAQIDEQQFEiExQQYTUWFxIoGRoQcyM0JSsSMkgpLBFBVTYnKDstHh8URUc5Oi0vAW/8QAGQEBAQEBAQEAAAAAAAAAAAAAAAECAwQF/8QAKBEBAQACAQMCBQUBAAAAAAAAAAECEQMSITEEEyIyQVGhQlJh0fAj/9oADAMBAAIRAxEAPwD0+MSxIEiaRoRSGkSSJWAikNIaQ7BCSHYaQ7ARsNIlYAFYLErBYBASsARECQARAkAEQsSACIErBYCFgsSsICLK5IuaK2g1FdiLRa0RsFVtEWi1kWgqpoWktaFYCnSMssAF6RKw7DSDGysNIaQwbKw7DsFgbKw7DGERsMY7ARHYdhgRsOwwAVgsMCiIEmKxAgHYTCkACaCmJgIAItErABBoTRNoiwINCsSaEFRI2LLCaCoWAkAF6Q7DQ7F05lYYwsAAOwECsOwwAAAAABmPCvrclH6sXpc/GXVL/MoubAIoYCAYAAhgAhOXjsSABWFYqq6o+1DdLmHiv6vgyyjWjOKlF3i+P4r1uA7BYkBFQFYnYLAVsiybIMKQmiQgIiJWEF2VhEgAvSGNIZpgrDACAAAAAGACAYAV4hS0T0O0tEtL8JW2fxNdlTSpxS4Tlb3ybNqaDGU6mHnOdGKnGTcpUb29rm8X5/8A1+Aum9QzS4btHh5R9qThUW3cyi1Ub8EvvP0NXju2MlKUKNCTlFuLc3ZKS5Vl1OPJz4cfzV24uDPk+WOuC5wM86x9R3TUV4KO3zKYwxsmv01S6d0723PPfXftwtemegv6s5HobYzhcRHGKSqOo9rLQm1B2Vt0VrGY2G+t7u9rbf7EvrtXvhSeh34zjvUxnHYTtRXhtWpqSS5WzflY3eDz/D1YuTmqelXlraiorxvwduP1XHyXUvf+XDl9Lycc3Z2bSRqsiqN1MZFX0RrR0+UnTWpLy2j8WYNftIq2uGFTlZWdZpxgpPiye7+Hpc3GS4RUaMY7ttucpPmU5ctno39Hn19WaAxBAAABBkGTkRDSIiVhAITGAEQHYAMkAGaZAABAAAFgAAAAAAmgGFj9rN8Pr5maYuYO0LtXSe662M5eGsPLn8yy+nXVqkYzTVldX2NZUyJpfoq1Sk1x9SrG3haaZ0EaWq8qbUkunVeqIO1900eXcvns9c7eGip08ZT214aovOlOnL4qSXyLY5hik1+q0ZeaxWn5aWbl0U+GUzwvkXpynhd43y09fNcY7Wy+D6v9ej7PxplUsbjpcYbD0/7VfX/hsbiWF8uSP8m+BmzJudP3c/Khi5SvOth6erlU6Dm/S9R2J0skpylGVWU60k9nOT0x8GoRdlv5m8eET5M7AYPrba278vUmPHlaZ5YybvdhZThNLS5fFrRSXpFJJI6tKyt4GuoVIyqKMWpNbtrhW6GyPTx46nl4+W7vgAAHRyAhgBCRAnIgw0QDEAgGxAIBgBkAAGmQAAQAABQAAAAAAAU4uGqnNf1Xb1LhEV53PMHGb7ubhUje8b2kvd1RmrtQ0oqtTjUTjfUvZly1/A5vt1hNFabW1m2mtn6o5j+eq0IQu1USc4+0t9rPlf2utz5vJxZ434K+jx8vHlP+kepQ7RYR895T8nFSXyL1nmDf/EeHMZpI8oj2ih9+lNejjL87GTg80oVHUSc040alVJxfFO05P92Mjn7nPj+n8f07e36fLv1fn+3qU82wn/M0/wDy/wAjHnn+CjzWcn5Qkzy+ec4dXWp3Ta+zn09xXLP6K4jUl+ykvmy+/wA98Y/g9j0885/mPS6navDr7KjOo/GTUY/Iwq+f1620pRpU192PsxS82edy7RTe0KcY+cm5fJWJ4KtUrzj3k5SV1txFe5bFmPPn811P99nPLPgw+Sbv++72Psk1OM5rdK0U/F9TojU9mMP3eGgvxbm2Po4Y9OMj52eXVlaAADTAAAAhIgTkQDQAAAQMAYCALDAvAAKyAAAAAAAAAKACutVjBOUnZLlnnfa36Qu7bpYVap8aiyJcpHe4/M6GHjqrVYQXm9/gcZm30o4ak3GjTlWfi3pR5dja+IxEnKtUe/S9zXa4U5WXtPq/AWyMbtdF2j7b1MRUbrUIqMt46W1KK468/wCpoamZ0pwsm09epXXRqz/JCniYThLVS7yCW6vplBvicZeK+DuaStSStolqT8rSXk0efLy9GFvS2cqifDXxLMDXUKsXfaSqUpP+rVpypS+UzRDu/Fmbi11NxjIaKk4vZxnJST5Uk/aj7nde4q1rq0Rz7FqvWdeKcVWhTlJeFbu4qtbydRSl+0a0SdluXdtVi4Lrf0MnC5/Km13UFq6OW+/oaJK5vMoo0kmku9qtX17qlRiuWlzOXTfZeZdJu6eh5N9IeJpRhCrGFRRSTdtLO0yjtzha9lJ91J9JcfE8YgrdLmRDnbZHqn2seXdnivoWlVjNXi00+q3LDxnIe0FfDNKM249Yt3TPTsjz2GJjttNcxJcPrFxzl7VuBABhtGRAnIgGgAAACAAEMAAvAADIAAAAACgE2Mqrt6ZW6RfxsB5t9JXazun3ELuTi3s7JdLs42jhEoKXMpxUnLm99yrtrGU8dWv0ULelv9zQrFVYx0KpJR/DfY6Zdrpxk33ZmMrynLRSTfRtdfQzsv7POSTmrvwN12eyqlUhGpDeD6ddXVS8/I7bAZdGKu0vI3jxzzWLnfEcPXyN06E592tMUtSa2cXs0cNmWWuDbh7cG3a28o9bNfxPbc1wU6tKpDo4SSS23tseRN1FO/Vcvi/qjny4S104s7I5xiOvlhcNU+tTSvvdxlFp+sH+dytdnKE941Gv7+n+UopnL266+7i5mk0/ZfD4fhIhod7W3Oo//M0utR7c/pqEf4MzMNkuGi4Sk4uS51VZVPlBJE9vJfdxc3lWAliMRSoUlqlUnGN+m7391rnXZHkS7/EUYPWqc6qdS31oxm1FL8y/JMLThON1PRF3WmKpxvxdL+LNr2YUpVq9SPsxjJpW49qTdvPg1x8fx92eTk3h2YGJyZxvsYjwTT4PQqlKM1ulc1lfAJ9D13GV5OqxzOGwrub/AC+tToyouOJpqrKo4d1upJpePX/UjXqywS/lShCcaEZScZdZvaPzZwEo1areKlz3iqaVe6WroYvw1uasfRGW4rvIJvnh+TRmGg7Ozbhqd99HPN7b+835xynevRjdyVBkRtiMtgAEAAAmAwEAF4xAGTAQAMBAAEZEiuoaV5v9IORSjCdejH9JRbqP2XJVMM9pbdHB2fo2eU4mN25RVr/d8H5H0zOMais/c+qfF0eedofo+s5VsHLu5JuShxT80n930e3g+Etb6vLjcbj48Mns/hIU6FKEUvYhFPjeVvab95uY1V4mnw025JUqVSlW0J1sFNPvE4pKVSnf7SL5uvHoZDlqWqDuuvin4M7zu4bZ1eulGTv9WLl8Fc4jO8BhMVCpiKD7nFwa73DPTom2/tF4J83V15HQzqOzW9mmn6NHA4bOoU5KniKTq9zJxo1lLTVhHVvBu3tR24fBz5Z4dePLzFOGwFZytGjVmt94aZppdVfk3VLsxiasE6eGxGne7lTownfrs5LY6LKHl9fRKNaVFtzko3UeXw9XsPjnk7zL6kYwspd4r7SVvBc6djn0um/o8kqdi8XtooVrWu1KNHVfwvqtYy8D2Gxsr66M4rznQivfZtnrUsXBctr1ukYmLzyjTScqkFe+larylbpGMbtvySLUkn3cllXYeSU5YmqoRUWmovU156nZL4Gxy7LIO8aNN0cNDTGnL71Wy9qpbnd9XzYpq9rsDUlGNbEQgnJ3pyukmuHNK9t+kmrW3Rt8C6td95GpGOHb/RqFpSqR6ScvPwRjer8Lp0yzunPDUKEHOSSUVdym9VkjzXNu1VfF42EMPU/kuHpy9qoouV4aleUoWept7KNt20up6J2nyOjiqNsTVnTpU3rlpkopq3W+3vfBy+DyrDLu6uHhGjhoWdLENOcZSlxUh1xFW31bezG/s3vqHTlle9LljjNaYfbuupUpUacGlVqRp8/UntKd7bbaWvVmF2ZymVW6snhoKKknBPvKqknCnGXOp23s7KPPn0EOz8q87z1U6Ufs6G0q0Y/in0hKXVt+VnbfqcJhIUIR+rFQWmCW0IJ828ZPrJ7v5HXKyOGONy8eE8vw3dU4xf1uZerM9MxIzuzJTObv/ENkQYiNGAgIHcVwAAGIALwI3HcMmAAAAAABXIsK6nBdq1WNnJO6bVuGiNHOlHaqml+NK696/wAjLq000afHYJ9NzOVbxjbulQxEU04ySd04texLxX4ZeaszHxWURn7V3rt9rF6Kj9bpqXv38zkMThpJ6oSlTmuJRbhJe9EsDnuZxlojGOK0q7UoqErf200vjczOWxMuHGsnPsNiKFN6KFTEStaMoQlq9ZKN4/NHkOYYarSm1Vi4Sk27O3J7lg+089LeKw7wulN71Yzk/wBlK8bv8VuTlMd2zx+Oc6eAw6pQi7SqSjGpJLxcp/o4ejTe+x0vJbN1znDJe1ecUKteCvDXFXTWztfxNzleb4qWyryklvKMIxnp85SbUIrbly9xuso7N4KpUdTMcyo1ajftUlXjShfwbbUn6LSd9h6GVd1GipYJ04tSjCNSioKSX1rJ8+b3Me7fo37M+rzit2unBOMLzm+ZatfjtraSf7ME7cSZoMVmVeu2m5WfMYuUnLw1S3c/WTZ7O8HlS5WDt51oW+bK5zyaHLy3bxlh5M1c9+WZxWeHh8sPVSm+7alJKMNS9q33rJ+XXwubXs5h87pP9SliKUZdUnOnv4rTJdFu0esvtTlOHXsVcPH/AKdJv/BEw8T9JGEX2VPEVvNQUIfGTv8AIxbG5jfu0i7A5jjtMs0zKtVirPuYuMKad736xv8A3afmdxl2RUMNGKirKEWlZtWXX2r3V7Xdmk3u0cRi/pExNTahh6dLzk5VpfKyXzNZVxGLxb/WK05x/BfTD9yNl8h7uvB7Uvnu9Ax3ajDUU4UbVZL7tO3dp+c+PhdmneNq4mSlUfDvGC2jH0Xj5mtyzKG7Wi37jrMvy5QSvyZmVb6Wyy2+lauUjORjUFZoyjrK52d0WIbEAwAAAQxAABcAulwCuAYSQXEAEgI3HcBkZrYkJhWPKJTOmZUkQaJY3GsxGCjLle/qYUMBKk26bVpJJxaTv4WfTlm+cCuVM53FuZOczNXouM8J/KG73jLQ6av4X36vhI4/M6mLnHu5RjToLZYeNJQoJeGnr77nplSKRh16UpbJJe67M3GtbjyiWXR+9h4esZTh8kyqWWU/6OqvSon+aPU45HFu8uvPVsueUUv6OHwuzOquo8k/myn+Cr/3I/8AqNZZHpS/enJ/lY9Y/mel/RQ+BZHLKa4pw/dRPiNYvKqOUy6RUfSCv8eTYYfs3Um03CUvNps9LhhIriMV6JItVEvTU7OKwXZWX3rRRvsHkVOHN5P4I3UaRZGmamCXKMelQSVkkkXwgWxgTUTpMWbSpxL7EYokbYqDESZEEACAAATYrhQAABaO5BMdw5p3AjcaYVICNx3AYCAGjZBoncAqqwmi2xFoNbUOihqmkW2FYliq3AWgsAmjavQGknYdho2r0EtJKw7F0I2HYaRKw0m0UiaiAXKmzAVxBAxWGACaFYYgItCaJXE2BEB3ABoYwDIQwAKaAACmhgAAAAAAAAQlyCAA1AwYAAmAAAyIABKIwAJQAAEACAAAAAQmMAIsTAAEAAB//9k=">
            <h2>Espresso</h2>
            <p>Espreso adalah jenis kopi yang dihasilkan dengan mengekstraksi biji kopi yang sudah digiling dengan menyemburkan air panas di bawah tekanan tinggi. Espresso berasal dari bahasa Italia yang berarti express atau "cepat" karena dibuat untuk disajikan dengan segera kepada pelanggan.</p>
            <b>RP.20.000</b>
            <br>
            <br>
            <button type="button" onclick="addToChart()">Add to Chart</button>
        </div>
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