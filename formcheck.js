function formcheck(){
    var flag=0;
    //名前(姓)
    if(document.accountblog.family.value==""){
        flag=1;
        document.getElementById('notice-input-text1').style.display="block";
    }else{
        dosument,getElementById('notice-input-text1').style.display="none";
    }
    //名前(名)
    if(document.accountblog.last.value==""){
        flag=1;
        document.getElementById('notice-input-text2').style.display="block";
    }else{
        dosument,getElementById('notice-input-text2').style.display="none";
    }
    //カナ(姓)
    if(document.accountblog.family_kana.value==""){
        flag=1;
        document.getElementById('notice-input-text3').style.display="block";
    }else{
        dosument,getElementById('notice-input-text3').style.display="none";
    }
    //カナ(名)
    if(document.accountblog.last_kana.value==""){
        flag=1;
        document.getElementById('notice-input-text4').style.display="block";
    }else{
        dosument,getElementById('notice-input-text4').style.display="none";
    }
    //メールアドレス
    if(document.accountblog.mail.value==""){
        flag=1;
        document.getElementById('notice-input-text5').style.display="block";
    }else{
        dosument,getElementById('notice-input-text5').style.display="none";
    }
    //パスワード
    if(document.accountblog.pass.value==""){
        flag=1;
        document.getElementById('notice-input-text6').style.display="block";
    }else{
        dosument,getElementById('notice-input-text6').style.display="none";
    }
    //郵便番号
    if(document.accountblog.postal.value==""){
        flag=1;
        document.getElementById('notice-input-text7').style.display="block";
    }else{
        dosument,getElementById('notice-input-text7').style.display="none";
    }
    //住所(市区町村)
    if(document.accountblog.address.value==""){
        flag=1;
        document.getElementById('notice-input-text8').style.display="block";
    }else{
        dosument,getElementById('notice-input-text8').style.display="none";
    }
    //住所(番地)
    if(document.accountblog.address2.value==""){
        flag=1;
        document.getElementById('notice-input-text9').style.display="block";
    }else{
        dosument,getElementById('notice-input-text9').style.display="none";
    }
    //住所(都道府県)
    if(document.accountblog.todofuken.value=="error"){
        flag=1;
        document.getElementById('notice-input-text10').style.display="block";
    }else{
        dosument,getElementById('notice-input-text10').style.display="none";
    }
    //送信ボタン
    if(flag){
        return false;
    }else{
        return true;
    }
}