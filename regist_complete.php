<?php
$password = $_POST['pass'];
$password_after = password_hash($password,PASSWORD_DEFAULT);
mb_internal_encoding("utf8");
try{
$pdo=new PDO("mysql:dbname=lesson01; host=localhost;","root","");
$pdo->exec("insert into acount(family_name,last_name,family_name_kana,last_name_kana,mail,password,gender,postal_code,prefecture,address_1,address_2,authority)
values('".$_POST['family']."','".$_POST['last']."','".$_POST['family_kana']."','".$_POST['last_kana']."','".$_POST['mail']."','$password_after',
'".$_POST['gender']."','".$_POST['postal']."','".$_POST['todofuken']."','".$_POST['address']."','".$_POST['address2']."','".$_POST['account']."');");
}catch(PDOException $e){
    echo '<font color=red>エラーが発生したためアカウント登録出来ません。</font>';
    exit;
}
?>

<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>登録完了画面</title>
        <link rel="stylesheet" type="text/css" href="style3.css">
    </head>
    <body>
        <header>
            <img src="diblog_logo.jpg"height="75pxpx" width="250px">
            <ul class="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li><a href="account.html">アカウント登録</a></li>
                <li>登録フォーム</li>
                <li>問い合わせ</li>
                <li>その他</li>
            </ul>
        </header>
        <main>
            <div class="fon1">
            <p>アカウント登録完了画面</p>
            </div>
            <br>
            <div class="fon2">
            <h2>登録完了しました</h2>
            </div>
            <div class="fon3">
            <input type="submit" class="button3" value="TOPページへ" onclick="location.href='index.html'">
            </div>
        </main>
        <footer>
                Copyright　D.I.works　D.I.blog　is　the　one　which　provides　A　to　Z　about　programming
        </footer>
    </body>
</html>