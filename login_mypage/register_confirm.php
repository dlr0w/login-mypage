<?php 
    mb_internal_encoding("utf8");

    $temp_pic_name = $_FILES['picture']['tmp_name'];

    $original_pic_name = $_FILES['picture']['name'];
    $path_filename = './image/'.$original_pic_name;

    move_uploaded_file($temp_pic_name,'./image/'.$original_pic_name);
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>マイページ登録</title>
        <link rel="stylesheet" type="text/css" href="style1.css">
    </head>
        <body>
            <header>
                <img src="4eachblog_logo.jpg">
                <div class="login"><a href="login.php">ログイン</a></div>
            </header>
            <main>
                <div class="confirm">

                    <h1>会員登録　確認</h1>

                    <div class="kakunin">
                        <p>こちらの内容で登録しても宜しいでしょうか？</p>
                    </div>

                    <div class="confirm_contents">
                        氏名 : <?php echo $_POST['name']; ?>    
                    </div>

                    <div class="confirm_contents">
                        メール : <?php echo $_POST['mail']; ?>                    
                    </div>

                    <div class="confirm_contents">
                        パスワード : <?php echo $_POST['password']; ?>
                    </div>

                    <div class="confirm_contents">
                        プロフィール写真 : <?php echo $original_pic_name; ?>
                    </div>

                    <div class="confirm_contents">
                        コメント : <?php echo $_POST['comments']; ?>
                    </div>
                    <div class="sousin">
                        <form action="register.php">
                            <input type="submit" class="back" value="戻って修正する"/>
                        </form>

                        <form action="register_insert.php" method="post">
                            <input type="submit" class="toroku" value="登録する"/>
                            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
                            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
                            <input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
                            <input type="hidden" value="<?php echo $original_pic_name; ?>" name='path_filename'>
                            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
                        </form>
                    </div>    
                </div>
            </main>
            <footer>
            ©2018 InterNous.inc. All rights reserved
            </footer>
        </body>
</html>