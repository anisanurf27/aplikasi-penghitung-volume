<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Hitung</title>
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
    <h1 style="color: #224B0C;">Aplikasi Penghitung Volume Bangun Ruang</h1>
    <p style="background-color: teal; color:teal;">...</p>
    <?php
        $startmenu = $_GET['starthitung']; 
        if($startmenu=='1') 
       { 
           ?> 
           <form method="POST" action="menu_hasil.php?hasilhitung=1"> 
           Masukan Panjang Alas Bangun Ruang :<br><input name="p" type="text"><br>
           <br>
           Masukan Lebar Bangun Ruang :<br><input name="l" type="text"><br> 
           <br>
           Masukan Tinggi  Bangun Ruang:<br> <input name="t" type="text"><br> 
           <br>
           <input type="submit" value="Submit"><br> 
           </form>
    <?php }
        elseif($startmenu=='2') 
       { 
           ?> 
           <form method="POST" action="menu_hasil.php?hasilhitung=2"> 
           Masukan Panjang Sisi :<br> <input name="s" type="text"><br> 
           <br>
           <input type="submit" value="Submit"><br> 
           </form> 
    <?php 
       }
       elseif($startmenu=='3') 
       { 
           ?> 
           <form method="POST" action="menu_hasil.php?hasilhitung=3"> 
           Masukan Jari Jari Bola :<br> <input name="r" type="text"><br>
           <br>
           <input type="submit" value="Submit"><br> 
           </form> 
           <?php 
       } 
    ?>
</div>
</body>
</html>