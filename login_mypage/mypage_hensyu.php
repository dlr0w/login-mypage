<?php
mb_internal_encoding("utf8");
session_start();

if(empty($_POST['from_mypage'])) {
    header('Location: login_error');
}
?>

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="mypage.css">
    </head>
    <body>
        <header>
                <img src="4eachblog_logo.jpg">
                <div class="login"><a href="logout.php">ログアウト</a></div>
        </header>
        <main>
            <div class="mypage_hensyu">
                <h1>会員情報</h1>
                <form action="mypage_update.php" method="post">

                    <div class="hello">
                        <p>こんにちは!　<?php echo $_SESSION['name']; ?>さん</p>
                    </div>

                    <div class="pic">
                        <img src="./image/<?php echo $_SESSION['picture']; ?>">
                    </div>
                        
                    <div class="box">
                        <div class="info">
                            氏名 : <input type="text" size="30" name="name" value="<?php echo $_SESSION['name']; ?>"><br>
                        </div>

                        <div class="info">
                            メール : <input type="text" size="30" name="mail" value="<?php echo $_SESSION['mail']; ?>" ><br>
                        </div>

                        <div class="info">
                            パスワード : <input type="password" size="30" name="password" value=""<?php echo $_SESSION['password']; ?>><br>
                        </div>
                    </div>
                        
                    <br>

                    <div class="comments">
                        <textarea name="comments" cols="77" rows="3"><?php echo $_SESSION['comments']; ?></textarea>
                    </div>
                    

                    <div class ="submit">
                            <input type="submit" class="sumbit_button" value="この内容に変更する">
                    </div>
                </form>
            </div>    
        </main>
        <footer>
            ©2018 InterNous.inc. All rights reserved
        </footer>
    </body>
</html>