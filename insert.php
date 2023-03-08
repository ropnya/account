<?php
mb_internal_encording("utf8");
$pdo=new PDO("mysql:dbname=lesson01; host=localhost;","root","");
$pdo->("insert into acount(familly_name,last_name,family_name_kana,last_name_kana,mail,password,
gender,postal_code,prefecture,address_1,address_2,authority)
values('".$_POST['family']."','".$_POST['last']."','".$_POST['family_kana']."','".$_POST['last_kana']."','".$_POST['mail']."''".$_POST['pass']."',
'".$_POST['gender']."''".$_POST['postal']."','".$_POST['todofuken']."','".$_POST['address']."','".$_POST['address2']."','".$_POST['account']."');");
?>

<!doctype HTML>
<htmel lang="ja">
    <head>
        <meta charset="utf-8">
        <title>登録完了画面</title>
        <linl rel="stylesheet" type="text/css" href="style3.css">
    </head>
    <body>
        <p>アカウント登録完了画面</p>
        <br>
        <h2>登録完了しました</h2>
    </body>
    <footer>
            Copyright　D.I.works　D.I.blog　is　the　one　which　provides　A　to　Z　about　programming
    </footer>
</html>