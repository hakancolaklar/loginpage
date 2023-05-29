<?php 

/* Cinsiyet IF Döngüsü */
$cinsiyet = 'ssd';
if($cinsiyet == 'Erkek')
    {
        $renk = 'style= "background-color: lightblue"';
        $font = 'style= "color: red"';
        $cinsiyetresult = 1;
    }
else if($cinsiyet == 'Kadin')
    {
        $renk = 'style= "background-color: pink"';
        $font = 'style= "color: white"';
        $cinsiyetresult = 0;
       
    }
else
    {
        $renk = 'style= "background-color: green"';
        $cinsiyetresult = 2;
    }

/* Yaş Hesaplama */
$bugun = 2023;
$birthday = 1996;
$yas = $bugun - $birthday;

/* Yaş IF Döngüsü */
if($yas >= 18)
    {
        $resultsonuc = 'Reşitsiniz';
        $yasresult = 1;
    }
else
    {
        $resultsonuc = 'Reşit değilsiniz';
        $yasresult = 0;
    }

/* Çıktı Döngüsü */
$secenekkadin = 'action="kadin.html"';
$secenekerkek = 'action="erkek.html"';
$seceneklgbt = 'action="lgbt.html"';
$secenekizinsiz = 'action="girisyok.html"';

if($yasresult == 0)
    {
        $sonuc = $secenekizinsiz;
    }
else if($cinsiyetresult == 0 && $yasresult == 1)
{
  $sonuc = $secenekkadin;
}
else if($cinsiyetresult == 1 && $yasresult == 1)
{
  $sonuc = $secenekerkek;
}
else if($cinsiyetresult == 2 && $yasresult == 1)
{
  $sonuc = $seceneklgbt;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Login Page</title>
      
</head>
<body <?php echo $renk; ?>>

    <div class="login"> 
        <img src="img/bg2.jpg" alt="">
        <h3>Welcome Back!</h3>
        <h2 class="shadow">Tecnical</h2>
        <form class="login-form" <?php echo $sonuc;?>>
            <input type="password" placeholder="Enter your password">
            <button class="button-82-pushable" role="button">
                <span class="button-82-shadow"></span>
                <span class="button-82-edge"></span>
                <span class="button-82-front text">
                <?php echo $resultsonuc; ?>
                </span>
            </button>
            <a href="#">Forget your password?</a>
        </form> 
        <button class="sign-in-button" onclick="location.href='register.html'">Sign In</button>
        <p id="error-message"></p>
    </div>
    
</body>
</html>


