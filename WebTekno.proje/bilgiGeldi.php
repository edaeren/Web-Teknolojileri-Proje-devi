<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formunuz ulaşmıştır. Teşekkürler!!</h1>
</body>
</html>

<?php error_reporting(E_ALL ^ E_NOTICE);
if(isset($_POST["name"])){ 
    echo("<table>
    <tr>
     <td>Ad</td>
      <td>:</td>
      <td>".$_POST["name"]."</td>
    </tr>");
}

if(isset($_POST["surname"])){
  
    echo("<table>
    <tr>
       <td>Soyad</td>
      <td>:</td>
      <td>".$_POST["surname"]."</td>
    </tr>");
}

if(isset($_POST["email"])){
  
    echo("<table>
    <tr>
       <td>Mail</td>
      <td>:</td>
      <td>".$_POST["email"]."</td>
    </tr>");
}
if(isset($_POST["cinsiyet1"])){
  
    print("<table><tr><td>Cinsiyet</td><td>:</td><td>".$POST["cinsiyet1"]."</td></tr>");
}

if(isset($_POST["cinsiyet2"])){
  
    echo("<table>
    <tr>
       <td>Cinsiyet</td>
      <td>:</td>
      <td>".$_POST["cinsiyet2"]."</td>
    </tr>");
    
}
if(isset($_POST["sehir"])){
  
    echo "
    <table>
    <tr>
        <td>Sehir</td>
        <td>:</td>
        <td>aaaaaa</td>
    
    ";
    
}





   /* echo"<table>";
    echo"<tr>";
    echo"    <td>Ad:</td>";
    echo"    <td>:</td>";
    echo"    <td>".$_POST["name"]."</td>";
    echo"</tr>";*/
    

    

      /*$item=$_POST["name"];
    echo("Ad :");
    echo($item);*/


?>