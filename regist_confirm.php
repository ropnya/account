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
            <label>名前(姓)</label>
            <p><?php echo $_POST['family'];?>
            </p>
            <label>名前(名)</label>
            <p><?php echo $_POST['last'];?>
            </p>
            <label>カナ(姓)</label>
            <p><?php echo $_POST['family_kana'];?>
            </p>
            <label>カナ(名)</label>
            <p><?php echo $_POST['last_kana'];?>
            </p>
            <label>メールアドレス</label>
            <p><?php echo $_POST['mail'];?>
            </p>
            <label>パスワード</label>
            <p><?php echo $_POST['pass'];?>
            </p>
            <label>性別</label>
            <p><?php if($_POST['gender']==="0"){echo '男';}
            elseif($_POST['gender']==="1"){echo '女';}
            ?></p>
            <label>郵便番号</label>
            <p><?php echo $_POST['postal'];?>
            </p>
            <label>住所(都道府県)</label>
            <p><?php echo $_POST['todofuken'];?>
            </p>
            <label>住所(市区町村)</label>
            <p><?php echo $_POST['address'];?>
            </p>
            <label>住所(番地)</label>
            <p><?php echo $_POST['address2'];?>
            </p>
            <label>アカウント権限/label>
            <p><?php if($_POST['account']==="0"){echo '一般';}
            elseif($_POST['account']==="1"){echo '管理者';}
            ?></p>

            <form action="regist.php" method="post">
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
            <form action="regist_complete.php" method="post">
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