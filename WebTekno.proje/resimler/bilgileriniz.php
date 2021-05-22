<?php error_reporting(E_ALL ^ E_NOTICE);
//session_start();

include("kullanici.php");

if(($_POST["kullanici"]==$user) && ($_POST["sifre"]==$pass)){
    $_SESSION["login"]="true";
    $_SESSION["user"]=$user;
    $_SESSION["pass"]=$pass;

    echo("Siteye başarıyla giriş yaptınız. HOŞGELDİNİZ!");
    header("Refresh: 1;url=index.html");
    
}else
{
  echo "Kullanıcı adı veya şifre yanlış.Tekrar deneyin.";
  header("Refresh: 1; url=login.php");
}
/*
if(($_SESSION["kullanicimaili"]==$user && $_SESSION["kullanicisifresi"]==$pass){
    $_SESSION["login"]="true";
    $_SESSION["user"]=$user;
    $_SESSION["pass"]=$pass;

    echo("Siteye başarıyla giriş yaptınız. HOŞGELDİNİZ!");

}else{
    echo "Kullanıcı adı veya şifre yanlış.Tekrar deneyin."
    header("Refresh:1; url=login.php");
}*/
?>