<html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu Hasil</title>
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
    <?php
        $hasil = $_GET['hasilhitung']; 
 
        function balok($panjang, $lebar, $tinggi) 
        { 
            $volumea = $panjang * $lebar * $tinggi;         
            echo "Rumus Volume Balok : panjang x lebar x tinggi";         
            echo "<br><br>"; 
            echo "Volume Balok yang anda hitung adalah : $volumea cm3";         
            echo "<br><br>";         
        }     
        
        function kubus($sisi) 
        { 
            $volumeb = $sisi * $sisi * $sisi;         
            echo "Rumus Volume kubus : sisi x sisi x sisi";         
            echo "<br><br>";         
            echo "Volume Kubus yang anda hitung adalah : $volumeb cm3";         
            echo "<br><br>";         
            
        }     
        
        function bola($jari) 
        { 
            $volumec = (4/3) * 3.14 * ($jari ** 3);         
            echo "Rumus Volume Bola : 4/3 * 3,14 *jari-jari ** 3";         
            echo "<br><br>";         
            echo "Volume Bola yang anda hitung adalah : $volumec cm3";         
            echo "<br><br>";            
        }  


        if($hasil=='1') 
        { 
    ?> 
            <h1 style="color: #224B0C;">Hasil Hitung Volume Bangun Ruang</h1>
            <p style="background-color: teal; color:teal;">...</p>
            <?php 
                $panjang = $_POST['p']; 
                $lebar = $_POST['l'];             
                $tinggi = $_POST['t']; 
                balok($panjang, $lebar, $tinggi);         
            ?> 
            <?php 
        }
        elseif($hasil=='2') 
        { 
            ?> 
            <h1 style="color: #224B0C;">Hasil Hitung Volume Bangun Ruang</h1>
            <p style="background-color: teal; color:teal;">...</p>
            <?php 
               $sisi = $_POST['s']; 
               kubus($sisi); 
            ?> 
            <?php 
        }
        elseif($hasil=='3') 
        { 
            ?> 
            <h1 style="color: #224B0C;">Hasil Hitung Volume Bangun Ruang</h1>
            <p style="background-color: teal; color:teal;">...</p>
            <?php 
               $jari = $_POST['r'];            
               bola($jari); 
            ?> 
            <?php 
        } 
        ?> 
    </body> 
    </html> 
</div>
</body>
</html>