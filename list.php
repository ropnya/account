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

                echo"<table>";

                echo"<tr><th>ID</th><th>名前(姓)</th><th>名前(名)</th><th>カナ(姓)</th><th>カナ(名)</th><th>メールアドレス</th><th>性別</th><th>アカウント権限</th><th>削除フラグ</th><th>登録日時</th><th>更新日時</th><th>操作</th></tr>";


                while($row=$stmt->fetch()){
                    echo"<tr>";
                    echo"<td>{$row['id']}</td>";
                    echo"<td>{$row['family_name']}</td>";
                    echo"<td>{$row['last_name']}</td>";
                    echo"<td>{$row['family_name_kana']}</td>";
                    echo"<td>{$row['last_name_kana']}</td>";
                    echo"<td>{$row['mail']}</td>";
                }

                echo"</table>";
                
            ?>
        </main>
    </body>
</html>
