<?php 
date_default_timezone_set("Asia/Bangkok");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form registrasi</title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
    <h1 class="a"><center>Form Registrasi</center></h1>
    <form class="b" action="proses.php" method="post">
        <label for="">Nama</label>
        <input type="text" name="nama" autocomplate = "off"> <br>
        <label for="">Umur</label>
        <input type="text" name="umur" autocomplate = "off"> <br>  
        <label for="">Email</label>
        <input type="text" name="email" autocomplate = "off"> <br> 
        <label for="">Komentar</label> <br>
        <textarea name="komentar" rows="8" cols="80"></textarea> <br> 
        <button type="submit" name="submit" value= <?php echo date("h:i:sa"); ?> >Submit</button>
    </form>
</body>
</html>