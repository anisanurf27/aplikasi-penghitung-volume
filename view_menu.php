<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Menu</title>
    <style>
        body {
            margin: 0;
        }
        ul{
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 25%;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }
        li a{
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }
        li a.active{
            background-color: teal;
            color: white;
        }
        li a:hover:not(.active){
            background-color: #555;
            color: white;
        }
    </style>
</head>
<body>
    <ul>
        <li><a class="active" href="view_menu.php">Home</a></li>
        <li><a href="menu_hitung.php?starthitung=1">Hitung Balok</a></li>
        <li><a href="menu_hitung.php?starthitung=2">Hitung Kubus</a></li>
        <li><a href="menu_hitung.php?starthitung=3">Hitung Bola</a></li>
    </ul>
    <div style="margin-left: 25%; padding:1px 16px; height:1000px">
    <h3 style="color: grey;">Welcome to..</h3>
    <h1 style="color: #224B0C;">Aplikasi Penghitung Volume Bangun Ruang</h1>
    <p style="background-color: teal; color:teal;">...</p>
    <h3>Disusun Oleh :</h3>
    <p>Nama : Anisa Nur Fadhilah</p>
    <p>NIM   : 3.34.21.0.05</p>
    <p>Kelas : IK-2A</p>
    </div>
</body>
</html></html>