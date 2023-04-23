<!doctype html>
<html lang="ja">

    <head>
     <meta charset="UTF-8">
        <title>アカウント登録</title>
        <link rel="stylesheet" type="text/css" href="style4.css">
        <script src="formcheck.js"></script>
    </head>

    <body>
        <header>
            <img src="diblog_logo.jpg"height="75pxpx" width="250px">
            <ul class="menu">
                <li>トップ</li>
                <li>プロフィール</li>
                <li>D.I.Blogについて</li>
                <li><a href="http://localhost/acountblog/regist.php">登録フォーム</a></li>
                <li><a href="http://localhost/acountblog/list.php">アカウント一覧</a></li>
                <li>問い合わせ</li>
                <li>その他</li>
                
             </ul>
        </header>
        <main>
            <div class="top1">
                <p>アカウント一覧画面</p>
            </div>
            <br>
            <?php
                mb_internal_encoding("utf8");
                $pdo=new PDO("mysql:dbname=lesson01;host=localhost;","root","");
                $stmt=$pdo->query("select* from acount");
                
            ?>
        </main>
    </body>
</html>
