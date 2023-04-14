<?php
?>
    <html>
    <head>
        <title>Biodata Diri</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f2f2f2;
            }

            h1 {
                text-align: center;
                margin-top: 50px;
                color: black;
            }

            .container {
                margin: 0 auto;
                max-width: 600px;
                background-color: #fff;
                padding: 30px;
                border-radius: 5px;
                box-shadow: 0px 0px 5px #ccc;
                margin-bottom: 50px;
            }

            img {
                display: block;
                margin: 0 auto;
                margin-top: 20px;
                width: 150px;
                height: 200px;
                object-fit: cover;
                border-radius: 5px;
                box-shadow: 0px 0px 5px #ccc;
            }

            table {
                margin-top: 30px;
                width: 100%;
                border-collapse: collapse;
                border: 2px solid #008080;
            }

            td {
                padding: 10px;
                border: 1px solid red;
            }

            .label {
                font-weight: bold;
                color: black;
                width: 30%;
            }

            .data {
                width: 70%;
            }
        </style>
    </head>
    <body>
        <h1>Biodata Diri</h1>

        <div class="container">
            <img src="foto.jpg" alt="Foto">

            <table>
                <tr>
                    <td class="label">Nama</td>
                    <td class="data">Tri Cahya Fitriansyah</td>
                </tr>
                <tr>
                    <td class="label">TTL</td>
                    <td class="data">Cirebom, 27 Desember 2000</td>
                </tr>
                <tr>
                    <td class="label">Jenis Kelamin</td>
                    <td class="data">Laki-laki</td>
                </tr>
                <tr>
                    <td class="label">Alamat</td>
                    <td class="data">Cirebon, Jawa Barat</td>
                </tr>
                <tr>
                    <td class="label">Riwayat Pendidikan</td>
                    <td class="data">
                        <ul>
                            <li>SDN 2 Cikalahang (2007-2013)</li>
                            <li>SMPN 1 Dukupuntang (2013-2016)</li>
                            <li>SMK Karya Nasional Sindangwangi (2016-2019)</li>
                            <li>Universitas Muhammadiyah Cirebon (2020-sekarang)</li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="label">Hobby</td>
                    <td class="data">Membaca, menulis, bersepeda</td>
                </tr>
            </table>
        </div>
    </body>
    </html>