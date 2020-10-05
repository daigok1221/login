<!doctype html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="after_register.css">
    </head>
    
   <body>
   
     <main>
        <form action="mypage.php" method="post" enctype="multipart/form-data">
    <div class="form_contents">
    
    <div class="mail">
        <div class="hissu">必須</div><label>メールアドレス</label><br>
        
        <input type="text" class="formbox" size="40" name="mail" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+.[a-z]{2,3}$" required>
     
    </div>
    <div class="password">
        
    <div class="hissu">必須</div>
        
        <label>パスワード（半角英数字6文字以上）
        </label><br>
        
        <input type="password" class="formbox" size="40" name="password" id="password" pattern="^[a-zA-Z0-9]{6,}$" required>
        
    </div>
  
    
    <div class="toroku">
        <input type="submit" class="submit_button" size="35" value="ログイン"> 
    </div>
</div>     
</form>
    
</main>
    
        <h1>お問い合わせファーム</h1>
    
        <div class="confirm">
            <p>登録有難うございました。</p>
        </div>
    </body>
</html>    