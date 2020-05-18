<!DOCTYPE html>
<html lang="en">
<head><meta charset="utf-8">
    <title>modul 2 - latihan 2b</title>
        <style>
            .kotak{
                width: 30px;
                height: 30px;
                text-align: center;
                line-height: 30px;
                border: 1px solid;
                float: left;
                margin: 2px;
                color: black;

            }
            .kotak1{
                background-color: black;
                width: 30px;
                height: 30px;
                text-align: center;
                line-height: 30px;
                border: 1px solid;
                float: left;
                margin: 2px;
            }
            .clear{
                clear: both;
            }
        </style>
</head>
<body>
<?php
    $baris = 1;


    while ($baris <= 5) {
        if ($baris %2) {
            for ($kolom=1; $kolom <=5 ; $kolom++) { 
                if ($kolom %2) {
                    echo "<div class='kotak1'></div>";
                }else{

                    echo "<div class='kotak'></div>";}  
            }echo "<div class='clear'></div>";
        }else{

            for ($kolom=1; $kolom <=5 ; $kolom++) { 
                if ($kolom %2) {
                    echo "<div class='kotak'></div>";
                }else{

                    echo "<div class='kotak1'></div>";} 
            }echo "<div class='clear'></div>";
}
$baris++;
    }
?>
</body>
</html>


