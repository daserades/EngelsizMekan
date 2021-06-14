<?php>
<?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link rel="stylesheet" href="login.css">
    <title>Giriş</title>
</head>
<body>
    <div class="row">
        <div class="col-md-6 mx-auto p-0">
            <div class="card">
                <div class="login-box">
                    <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Giriş</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Kayıt Ol</label>
                        <div class="login-space">
                            <div class="login">
                                <div class="group"> <label for="user" class="label">Kullanıcı Adı</label> <input id="user" type="text" class="input" placeholder="Kullanıcı Adı Giriniz.."> </div>
                                <div class="group"> <label for="pass" class="label">Şifre</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Şifre Giriniz.."> </div>
                                <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Beni Hatırla</label> </div>
                                <div class="group"> <a href="anasayfa.php"><input type="submit" class="button" value="Giriş"></a></div>
                                <div class="hr"> </div>
                                <div class="foot"> <a href="anasayfa.php">Şifreyi Mi Unuttunuz?</a> </div>
                            </div>
                            <div class="sign-up-form" >
                                <div class="group"> <label for="user" class="label">Kullanıcı Adı</label> <input id="user" type="text" class="input" placeholder="Kullanıcı Adı Giriniz.."> </div>
                                <div class="group"> <label for="pass" class="label">Şifre</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Şifre Giriniz.."> </div>
                                <div class="group"> <label for="pass" class="label">Şifre Tekrar Giriniz</label> <input id="pass" type="password" class="input" data-type="password" placeholder="Şifreyi Tekrar Giriniz.."> </div>
                                <div class="group"> <label for="pass" class="label">Email</label> <input id="pass" type="text" class="input" placeholder="Enter Giriniz.."> </div>
                                <div class="group" ><a href="anasayfa.php"><input href="anasayfa.php" type="submit" class="button" value="Kayıt Ol" > </a></div>
                                <div class="hr"></div>
                                <div class="foot"> <label for="tab-1">Üye misiniz?</label> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
