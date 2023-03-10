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
            <form method="post" action="http://localhost/acountblog/account_confirm.php">
                <div>
                    <label>名前(姓)</label>
                    <input type="text" maxlength="10" class="text" size="35" name="family">
                </div>
                <br>
                <div>
                    <label>名前(名)</label>
                    <input type="text" maxlength="10" class="text" size="35" name="last">
                </div>
                <br>
                <div>
                    <label>カナ(姓)</label>
                    <input type="text" maxlength="10" class="text" size="35" name="family_kana">
                </div>
                <br>
                <div>
                    <label>カナ(名)</label>
                    <input type="text" maxlength="10" class="text" size="35" name="last_kana">
                </div>
                <br>
                <div>
                    <label>メールアドレス</label>
                    <input type="email" maxlength="100" class="text" size="35" name="mail">
                </div>
                <br>
                <div>
                    <label>パスワード</label>
                    <input type="password" maxlength="10" class="text" size="35" name="pass">
                </div>
                <br>
                <div>
                    <label>性別</label>
                    <label><input type="radio" name="gender" value="0" checked>男</label>
                    <label><input type="radio" name="gender" value="1">女</label>
                </div>
                <br>
                <div>
                    <label>郵便番号</label>
                    <input type="text" maxlength="7" class="text" size="10" name="postal">
                </div>
                <br>
                <div>
                    <label>住所(都道府県)</label>
                    <select name="todofuken">
                        <option value="error"></option>
                        <option value="1">北海道</option>
                        <option value="2">青森</option>
                        <option value="3">岩手</option>
                        <option value="4">宮城</option>
                        <option value="5">秋田</option>
                        <option value="6">山形</option>
                        <option value="7">福島</option>
                        <option value="8">茨城</option>
                        <option value="9">栃木</option>
                        <option value="10">群馬</option>
                        <option value="11">埼玉</option>
                        <option value="12">千葉</option>
                        <option value="13">東京</option>
                        <option value="14">神奈川</option>
                        <option value="15">新潟</option>
                        <option value="16">富山</option>
                        <option value="17">石川</option>
                        <option value="18">福井</option>
                        <option value="19">山梨</option>
                        <option value="20">長野</option>
                        <option value="21">岐阜</option>
                        <option value="22">静岡</option>
                        <option value="23">愛知</option>
                        <option value="24">三重</option>
                        <option value="25">滋賀</option>
                        <option value="26">京都</option>
                        <option value="27">大阪</option>
                        <option value="28">兵庫</option>
                        <option value="29">奈良</option>
                        <option value="30">和歌山</option>
                        <option value="31">鳥取</option>
                        <option value="32">島根</option>
                        <option value="33">岡山</option>
                        <option value="34">広島</option>
                        <option value="35">山口</option>
                        <option value="36">徳島</option>
                        <option value="37">香川</option>
                        <option value="38">愛媛</option>
                        <option value="39">高知</option>
                        <option value="40">福岡</option>
                        <option value="41">佐賀</option>
                        <option value="42">長崎</option>
                        <option value="43">熊本</option>
                        <option value="44">大分</option>
                        <option value="45">宮崎</option>
                        <option value="46">鹿児島</option>
                        <option value="47">沖縄</option>
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