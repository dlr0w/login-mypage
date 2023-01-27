<?php
session_start();
if(isset($_SESSION['id'])) {
    header("Location:mypage.php");
}
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>

    <body>
        <header>
            <img src="4eachblog_logo.jpg">
            <div class="login"><a href="login.php">ログイン</a></div>
        </header>
        <main>
            <div class="loginform">
                <form action="mypage.php" method="post">
                    <div class="form">
                        <label>メールアドレス</label><br>
                        <input type="text" size="45" name="mail" value="<?php 
                        if(!empty($_COOKIE['mail'])) {
                            echo $_COOKIE['mail'];
                        } else {
                        }
                        ?>" required>                   
                    </div>

                    <div class="form">
                        <label>パスワード</label><br>
                        <input type="password" size="45" name="password" value="<?php 
                        if(!empty($_COOKIE['password'])) { 
                            echo $_COOKIE['password'];
                        } else {
                        }
                        ?>" required>
                    </div>

                    <div class="form">
                        <label><input type="checkbox" name="login_keep" value="login_keep"
                        <?php
                        if(!empty($_COOKIE['login_keep'])) {
                            echo "checked='checked'";
                        }
                        ?>>
                        ログイン状態を保持する</label>
                    </div>

                    <div class="submit">
                        <input type="submit" class="sumbit_button" size="35" value="ログイン">
                    </div>
                </form>
            </div>
        </main>
        <footer>
            © 2018 InterNous.inc All rights reserved
        </footer>
    </body> 
</html>