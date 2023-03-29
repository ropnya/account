<!doctype html>
<html lang="ja">

    <head>
     <meta charset="UTF-8">
        <title>アカウント登録</title>
        <link rel="stylesheet" type="text/css" href="style2.css">
        <script src="formcheck.js"></script>
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
            <form method="post" action="http://localhost/acountblog/regist_confirm.php" name="accountblog" >
                <div>
                    <label>名前(姓)</label>
                    <input type="text" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" title="ひらがなまたは漢字で入力してください。"  maxlength="10" class="text1" size="35" name="family" value="<?php if(!empty($_POST['family'])){echo $_POST['family'];}?>">
                    <p id="notice-input-text1" style="display:none; color:red;">名前(姓)が未入力です。</p>
                </div>
                <br>
                <div>
                    <label>名前(名)</label>
                    <input type="text" pattern="[\u4E00-\u9FFF\u3040-\u309Fー]*" title="ひらがなまたは漢字で入力してください。"  maxlength="10" class="text" size="35" name="last" value="<?php if(!empty($_POST['last'])){echo $_POST['last'];}?>">
                    <p id="notice-input-text2" style="display:none; color:red;">名前(名)が未入力です。</p>

                </div>
                <br>
                <div>
                    <label>カナ(姓)</label>
                    <input type="text" pattern="[\u30A1-\u30F6]*" title="カタカナのみを入力してください。"  pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*" title="カタカナのみを入力してください。"  maxlength="10" class="text" size="35" name="family_kana" value="<?php if(!empty($_POST['family_kana'])){echo $_POST['family_kana'];}?>">
                    <p id="notice-input-text3" style="display:none; color:red;">カナ(姓)が未入力です。</p>
                </div>
                <br>
                <div>
                    <label>カナ(名)</label>
                    <input type="text" pattern="[\u30A1-\u30F6]*" title="カタカナのみを入力してください。" maxlength="10" class="text" size="35" name="last_kana" value="<?php if(!empty($_POST['last_kana'])){echo $_POST['last_kana'];}?>">
                    <p id="notice-input-text4" style="display:none; color:red;">カナ(名)が未入力です。</p>
                </div>
                <br>
                <div>
                    <label>メールアドレス</label>
                    <input type="email" pattern="^[0-9a-zA-Z-@]+$" maxlength="100" class="text" size="35" name="mail" value="<?php if(!empty($_POST['mail'])){echo $_POST['mail'];}?>">
                    <p id="notice-input-text5" style="display:none; color:red;">メールアドレスが未入力です。</p>
                </div>
                <br>
                <div>
                    <label>パスワード</label>
                    <input type="password" pattern="^[0-9a-zA-Z]+$" title="半角英数字で入力してください。" maxlength="10" class="text" size="35" name="pass" value="<?php if(!empty($_POST['pass'])){echo $_POST['pass'];}?>">
                    <p id="notice-input-text6" style="display:none; color:red;">パスワードが未入力です。</p>
                </div>
                <br>
                <div>
                    <label>性別</label>
                    <label><input type="radio" required name="gender" value="0" <?php if(!empty($_POST['gender']) && $_POST['gender']==="0"){echo'checked';}?> checked>男</label>
                    <label><input type="radio" required name="gender" value="1" <?php if(!empty($_POST['gender']) && $_POST['gender']==="1"){echo'checked';}?>>女</label>
                </div>
                <br>
                <div>
                    <label>郵便番号</label>
                    <input type="text" pattern="^[0-9]+$" title="半角数字のみ入力してください。" maxlength="7" class="text" size="10" name="postal" value="<?php if(!empty($_POST['postal'])){echo $_POST['postal'];}?>">
                    <p id="notice-input-text7" style="display:none; color:red;">郵便番号が未入力です。</p>
                </div>
                <br>
                <div>
                    <label>住所(都道府県)</label>
                    <select name="todofuken">
                        <option value=""></option>
                        <option value="北海道" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="北海道"){echo 'selected';}?>>北海道</option>
                        <option value="青森" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="青森"){echo 'selected';}?>>青森</option>
                        <option value="岩手" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="岩手"){echo 'selected';}?>>岩手</option>
                        <option value="宮城" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="宮城"){echo 'selected';}?>>宮城</option>
                        <option value="秋田" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="秋田"){echo 'selected';}?>>秋田</option>
                        <option value="山形" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="山形"){echo 'selected';}?>>山形</option>
                        <option value="福島" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="福島"){echo 'selected';}?>>福島</option>
                        <option value="茨城" <?php if(!empty($_POST['todofuken']) && $_POST['todofuken']==="茨城"){echo 'selected';}?>>茨城</option>
                        <option value="栃木" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="栃木"){echo 'selected';}?>>栃木</option>
                        <option value="群馬" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="群馬"){echo 'selected';}?>>群馬</option>
                        <option value="埼玉" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="埼玉"){echo 'selected';}?>>埼玉</option>
                        <option value="千葉" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="千葉"){echo 'selected';}?>>千葉</option>
                        <option value="東京" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="東京"){echo 'selected';}?>>東京</option>
                        <option value="神奈川" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="神奈川"){echo 'selected';}?>>神奈川</option>
                        <option value="新潟" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="新潟"){echo 'selected';}?>>新潟</option>
                        <option value="富山" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="富山"){echo 'selected';}?>>富山</option>
                        <option value="石川" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="石川"){echo 'selected';}?>>石川</option>
                        <option value="福井" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="福井"){echo 'selected';}?>>福井</option>
                        <option value="山梨" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="山梨"){echo 'selected';}?>>山梨</option>
                        <option value="長野" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="長野"){echo 'selected';}?>>長野</option>
                        <option value="岐阜" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="岐阜"){echo 'selected';}?>>岐阜</option>
                        <option value="静岡" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="静岡"){echo 'selected';}?>>静岡</option>
                        <option value="愛知" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="愛知"){echo 'selected';}?>>愛知</option>
                        <option value="三重" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="三重"){echo 'selected';}?>>三重</option>
                        <option value="滋賀" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="滋賀"){echo 'selected';}?>>滋賀</option>
                        <option value="京都" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="京都"){echo 'selected';}?>>京都</option>
                        <option value="大阪" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="大阪"){echo 'selected';}?>>大阪</option>
                        <option value="兵庫" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="兵庫"){echo 'selected';}?>>兵庫</option>
                        <option value="奈良" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="奈良"){echo 'selected';}?>>奈良</option>
                        <option value="和歌山" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="和歌山"){echo 'selected';}?>>和歌山</option>
                        <option value="鳥取" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="鳥取"){echo 'selected';}?>>鳥取</option>
                        <option value="島根" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="島根"){echo 'selected';}?>>島根</option>
                        <option value="岡山" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="岡山"){echo 'selected';}?>>岡山</option>
                        <option value="広島" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="広島"){echo 'selected';}?>>広島</option>
                        <option value="山口" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="山口"){echo 'selected';}?>>山口</option>
                        <option value="徳島" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="徳島"){echo 'selected';}?>>徳島</option>
                        <option value="香川" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="香川"){echo 'selected';}?>>香川</option>
                        <option value="愛媛" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="愛媛"){echo 'selected';}?>>愛媛</option>
                        <option value="高知" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="高知"){echo 'selected';}?>>高知</option>
                        <option value="福岡" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="福岡"){echo 'selected';}?>>福岡</option>
                        <option value="佐賀" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="佐賀"){echo 'selected';}?>>佐賀</option>
                        <option value="長崎" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="長崎"){echo 'selected';}?>>長崎</option>
                        <option value="熊本" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="熊本"){echo 'selected';}?>>熊本</option>
                        <option value="大分" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="大分"){echo 'selected';}?>>大分</option>
                        <option value="宮崎" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="宮崎"){echo 'selected';}?>>宮崎</option>
                        <option value="鹿児島" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="鹿児島"){echo 'selected';}?>>鹿児島</option>
                        <option value="沖縄" <?php if(!empty($_POST['todofuken']) && $_POST["todofuken"]==="沖縄"){echo 'selected';}?>>沖縄</option>
                    </select>
                    <p id="notice-input-text8" style="display:none; color:red;">住所(都道府県)が未選択です。</p>
                </div>
                <br>
                <div>
                    <label>住所(市区町村)</label>
                    <input type="text" pattern="[\u4E00-\u9FFF\u3040-\u309Fー\u30A1-\u30F6\0-9- 　]*" title="ローマ字、特殊記号は使わないでください。" maxlength="10" class="text" size="35" name="address" value=<?php if(!empty($_POST['address'])){echo $_POST['address'];}?>>
                    <p id="notice-input-text9" style="display:none; color:red;">住所(市区町村)が未入力です。</p>
                </div>
                <br>
                <div>
                    <label>住所(番地)</label>
                    <input type="text"　pattern="[\u4E00-\u9FFF\u3040-\u309Fー\u30A1-\u30F6\0-9- 　]*" title="ローマ字、特殊記号は使わないでください。"  maxlength="100" class="text" size="35" name="address2" value=<?php if(!empty($_POST['address2'])){echo $_POST['address2'];}?>>
                    <p id="notice-input-text10" style="display:none; color:red;">住所(番地)が未入力です。</p>
                </div>
                <br>
                <div>
                    <label>アカウント権限</label>
                    <select name="account">
                        <option value="0"  <?php if(!empty($_POST['account']) && $_POST["account"]==="0"){echo 'selected';}?>>一般</option>
                        <option value="1"  <?php if(!empty($_POST['account']) && $_POST["account"]==="1"){echo 'selected';}?>>管理者</option>
                </div>
                <div>
                    <input type="submit" class="submit" value="確認する" onclick="return formcheck()">
                </div>
            </form>
        </main>
        <footer>
            Copyright　D.I.works　D.I.blog　is　the　one　which　provides　A　to　Z　about　programming
        </footer>
        

    </body>
</html>