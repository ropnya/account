<!doctype HTML>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>アカウント登録確認画面</title>
        <link rel="stylesheet" type="text/css" href="confirm.css">
    </head>
    <body>
        <h3>アカウント登録画面</h3>
        
        <div class="confirm">
            <p>名前(姓)<?php echo $_POST['family'];?>
            </p>
            <p>名前(名)<?php echo $_POST['last'];?>
            </p>
            <p>カナ(姓)<?php echo $_POST['family_kana'];?>
            </p>
            <p>カナ(名)<?php echo $_POST['last_kana'];?>
            </p>
            <p>メールアドレス<?php echo $_POST['mail'];?>
            </p>
            <p>パスワード<?php echo $_POST['pass'];?>
            </p>
            <p>性別<?php echo $_POST['gender'];?>
            </p>
            <p>郵便番号<?php echo $_POST['postal'];?>
            </p>
            <p>住所(都道府県)<?php echo $_POST['todofuken'];?>
            </p>
            <p>住所(市区町村)<?php echo $_POST['address'];?>
            </p>
            <p>住所(番地)<?php echo $_POST['address2'];?>
            </p>
            <p>アカウント権限<?php echo $_POST['account'];?>
            </p>

            <form action="account.php" method="post">
                <input type="submit" class="button1" value="前に戻る">
                <input type="hidden" value="<?php echo $_POST['family'];?>" name="family">
                <input type="hidden" value="<?php echo $_POST['last'];?>" name="last">
                <input type="hidden" value="<?php echo $_POST['family_kana'];?>" name="family_kana">
                <input type="hidden" value="<?php echo $_POST['last_kana'];?>" name="last_kana">
                <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['pass'];?>" name="pass">
                <input type="hidden" value="<?php echo $_POST['gender'];?>" name="gender">
                <input type="hidden" value="<?php echo $_POST['postal'];?>" name="postal">
                <input type="hidden" value="<?php echo $_POST['todofuken'];?>" name="todofuken">
                <input type="hidden" value="<?php echo $_POST['address'];?>" name="address">
                <input type="hidden" value="<?php echo $_POST['address2'];?>" name="address2">
                <input type="hidden" value="<?php echo $_POST['account'];?>" name="account">
            </form>
            <form action="insert.php" method="post">
                <input type="submit" class="buttom2" value="登録する">
                <input type="hidden" value="<?php echo $_POST['family'];?>" name="family">
                <input type="hidden" value="<?php echo $_POST['last'];?>" name="last">
                <input type="hidden" value="<?php echo $_POST['family_kana'];?>" name="family_kana">
                <input type="hidden" value="<?php echo $_POST['last_kana'];?>" name="last_kana">
                <input type="hidden" value="<?php echo $_POST['mail'];?>" name="mail">
                <input type="hidden" value="<?php echo $_POST['pass'];?>" name="pass">
                <input type="hidden" value="<?php echo $_POST['gender'];?>" name="gender">
                <input type="hidden" value="<?php echo $_POST['postal'];?>" name="postal">
                <input type="hidden" value="<?php echo $_POST['todofuken'];?>" name="todofuken">
                <input type="hidden" value="<?php echo $_POST['address'];?>" name="address">
                <input type="hidden" value="<?php echo $_POST['address2'];?>" name="address2">
                <input type="hidden" value="<?php echo $_POST['account'];?>" name="account">
            </form>
        </div>
    </body>
</html>