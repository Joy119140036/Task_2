<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jual Beli Motor</title>

    <style>
        #tabel{
            text-align: justify;
            margin-left: auto;
            margin-right: auto;
            margin-top: auto;
            border: 5px solid rgb(0, 0, 0);
        }

        div.border_tabel{
            margin: auto;
            border: 10px outset rgb(81, 255, 0);
            top: 80%;
            width: 20%;
            background-color: rgb(0, 247, 255);  
        }


        #form{
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: medium;
            text-align: center;
        }

        body{
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            background-image: white;
        }
        .resizedTextbox{
            width: 30px; 
            height: 10px
        }
        footer{
            font-style: bold;
            font-size: medium;
            color: rgb(0, 0, 0);
            text-align: center;
        }

    </style>
</head>
<body>
    
<br>
    <div class="border_tabel">
        <h2 id="form">MASUKAN SPESIFIKASI MOTOR</h2>
        <form  method="get" action="detail.php" id="form">
            <table id="tabel">
                <tr>
                    <th>Merek: <input type="text" name="fmerek" id="fmerek" > </th> 
                </tr>

                <tr>
                    <th>Jenis: <input type="text" name="fjenis" id="fjenis"> </th>
                </tr>

                <tr>
                    <th>Harga: <input type="text" name="fharga" id="fharga" > </th>
                </tr>

    </br>
                <tr>
                    <th>
                        Jumlah Motor : <input type="number" class="resizedTextbox" name=fjumlah><label for="tab2"> Motor</label>
                    </th>
                </tr>
            </table>
            <input type="submit" name = "submit" value="submit">
        </form>
    </div>

<?php 
    if(isset($_GET['submit']))
    {
        $fmerek = $_GET['fmerek'];
        $fjenis = $_GET['fjenis'];
        $fharga = $_GET['fharga'];
        $fjumlah = $_GET['fjumlah'];
    }
?>
</body>
<footer>
    ©Joy AS
</footer>
</html>