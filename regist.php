<!doctype html>
<html lang="ja">

    <head>
     <meta charset="UTF-8">
        <title>アカウント登録</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
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
            <h3>アカウント登録画面</h3>
            <br>
            <form method="post" action="http://localhost/acountblog/regist_confirm.php">
                <div>
                    <label>名前(姓)</label>
                    <input type="text" maxlength="10" class="text" size="35" name="family" value="<?php if(!empty($_POST['family'])){echo $_POST['family'];}?>">
                </div>
                <br>
                <div>
                    <label>名前(名)</label>
                    <input type="text" maxlength="10" class="text" size="35" name="last" value="<?php if(!empty($_POST['last'])){echo $_POST['last'];}?>">
                </div>
                <br>
                <div>
                    <label>カナ(姓)</label>
                    <input type="text" maxlength="10" class="text" size="35" name="family_kana" value="<?php if(!empty($_POST['family_kana'])){echo $_POST['family_kana'];}?>">
                </div>
                <br>
                <div>
                    <label>カナ(名)</label>
                    <input type="text" maxlength="10" class="text" size="35" name="last_kana" value="<?php if(!empty($_POST['last_kana'])){echo $_POST['last_kana'];}?>">
                </div>
                <br>
                <div>
                    <label>メールアドレス</label>
                    <input type="email" maxlength="100" class="text" size="35" name="mail" value="<?php if(!empty($_POST['mail'])){echo $_POST['mail'];}?>">
                </div>
                <br>
                <div>
                    <label>パスワード</label>
                    <input type="password" maxlength="10" class="text" size="35" name="pass" value="<?php if(!empty($_POST['pass'])){echo $_POST['pass'];}?>">
                </div>
                <br>
                <div>
                    <label>性別</label>
                    <label><input type="radio" name="gender" value="0" <?php if(!empty($_POST['gender']) && $_POST['gender']==="0"){echo'checked';}?> checked>男</label>
                    <label><input type="radio" name="gender" value="1" <?php if(!empty($_POST['gender']) && $_POST['gender']==="1"){echo'checked';}?>>女</label>
                </div>
                <br>
                <div>
                    <label>郵便番号</label>
                    <input type="text" maxlength="7" class="text" size="10" name="postal" value="<?php if(!empty($_POST['postal'])){echo $_POST['postal'];}?>">
                </div>
                <br>
                <div>
                    <label>住所(都道府県)</label>
                    <select name="todofuken">
                        <option value="error"></option>
                        <option value="1" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="1"){echo 'selected';}?>>北海道</option>
                        <option value="2" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="2"){echo 'selected';}?>>青森</option>
                        <option value="3" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="3"){echo 'selected';}?>>岩手</option>
                        <option value="4" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="4"){echo 'selected';}?>>宮城</option>
                        <option value="5" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="5"){echo 'selected';}?>>秋田</option>
                        <option value="6" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="6"){echo 'selected';}?>>山形</option>
                        <option value="7" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="7"){echo 'selected';}?>>福島</option>
                        <option value="8" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="8"){echo 'selected';}?>>茨城</option>
                        <option value="9" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="9"){echo 'selected';}?>>栃木</option>
                        <option value="10" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="10"){echo 'selected';}?>>群馬</option>
                        <option value="11" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="11"){echo 'selected';}?>>埼玉</option>
                        <option value="12" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="12"){echo 'selected';}?>>千葉</option>
                        <option value="13" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="13"){echo 'selected';}?>>東京</option>
                        <option value="14" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="14"){echo 'selected';}?>>神奈川</option>
                        <option value="15" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="15"){echo 'selected';}?>>新潟</option>
                        <option value="16" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="16"){echo 'selected';}?>>富山</option>
                        <option value="17" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="17"){echo 'selected';}?>>石川</option>
                        <option value="18" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="18"){echo 'selected';}?>>福井</option>
                        <option value="19" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="19"){echo 'selected';}?>>山梨</option>
                        <option value="20" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="20"){echo 'selected';}?>>長野</option>
                        <option value="21" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="21"){echo 'selected';}?>>岐阜</option>
                        <option value="22" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="22"){echo 'selected';}?>>静岡</option>
                        <option value="23" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="23"){echo 'selected';}?>>愛知</option>
                        <option value="24" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="24"){echo 'selected';}?>>三重</option>
                        <option value="25" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="25"){echo 'selected';}?>>滋賀</option>
                        <option value="26" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="26"){echo 'selected';}?>>京都</option>
                        <option value="27" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="27"){echo 'selected';}?>>大阪</option>
                        <option value="28" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="28"){echo 'selected';}?>>兵庫</option>
                        <option value="29" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="29"){echo 'selected';}?>>奈良</option>
                        <option value="30" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="30"){echo 'selected';}?>>和歌山</option>
                        <option value="31" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="31"){echo 'selected';}?>>鳥取</option>
                        <option value="32" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="32"){echo 'selected';}?>>島根</option>
                        <option value="33" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="33"){echo 'selected';}?>>岡山</option>
                        <option value="34" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="34"){echo 'selected';}?>>広島</option>
                        <option value="35" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="35"){echo 'selected';}?>>山口</option>
                        <option value="36" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="36"){echo 'selected';}?>>徳島</option>
                        <option value="37" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="37"){echo 'selected';}?>>香川</option>
                        <option value="38" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="38"){echo 'selected';}?>>愛媛</option>
                        <option value="39" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="39"){echo 'selected';}?>>高知</option>
                        <option value="40" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="40"){echo 'selected';}?>>福岡</option>
                        <option value="41" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="41"){echo 'selected';}?>>佐賀</option>
                        <option value="42" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="42"){echo 'selected';}?>>長崎</option>
                        <option value="43" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="43"){echo 'selected';}?>>熊本</option>
                        <option value="44" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="44"){echo 'selected';}?>>大分</option>
                        <option value="45" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="45"){echo 'selected';}?>>宮崎</option>
                        <option value="46" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="46"){echo 'selected';}?>>鹿児島</option>
                        <option value="47" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="47"){echo 'selected';}?>>沖縄</option>
                    </select>
                </div>
                <br>
                <div>
                    <label>住所(市区町村)</label>
                    <input type="text" maxlength="10" class="text" size="35" name="address">
                </div>
                <br>
                <div>
                    <label>住所(番地)</label>
                    <input type="text" maxlength="100" class="text" size="35" name="address2">
                </div>
                <br>
                <div>
                    <label>アカウント権限</label>
                    <select name="account">
                        <option value="0">一般</option>
                        <option value="1">管理者</option>
                </div>
                <div>
                    <input type="submit" class="submit" value="確認する">
                </div>
            </form>
        </main>
        <footer>
            Copyright　D.I.works　D.I.blog　is　the　one　which　provides　A　to　Z　about　programming
        </footer>
    </body>
</html>