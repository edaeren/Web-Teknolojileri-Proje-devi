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
  
    print("<table><tr><td>Cinsiyet1</td><td>:</td><td>".$POST["cinsiyet1"]."</td></tr>");
}

if(isset($_POST["cinsiyet2"])){
  
    echo("<table>
    <tr>
       <td>Cinsiyet2</td>
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
        <td>".$_POST["sehir"]."</td>
    
    ";   
}
if(isset($_POST["alan1"])||isset($_POST["alan2"])||isset($_POST["alan3"])||isset($_POST["alan4"])||isset($_POST["alan5"])||isset($_POST["alan6"])||isset($_POST["alan7"])){
  
    echo "
    <table>
    <tr>
        <td>İlgi Alanları</td>
        <td>:</td>
        <td>".$_POST["alan1"]."</td>
        <td>".$_POST["alan2"]."".","." </td>
        <td>".$_POST["alan3"]."".","." </td>
        <td>".","." ".$_POST["alan4"]."</td>
        <td>".","." ".$_POST["alan5"]."</td>
        <td>".","." ".$_POST["alan6"]."</td>
        <td>".","." ".$_POST["alan7"]."</td>

    ";  
}
if(isset($_POST["message"])){
  
    echo "
    <table>
    <tr>
        <td>Mesajınız</td>
        <td>:</td>
        <td>".$_POST["message"]."</td>
    
    ";   
}

if(isset($_POST["dosya"])){
  
    echo "
    <table>
    <tr>
        <td>Bize Gönderdiğiniz Dosya</td>
        <td>:</td>
        <td>".$_POST["dosya"]."</td>
    
    ";   
}

?>