<?php
    if($_SERVER["REQUEST_METHOD"] !== "POST"){
        header("Location: contact.php");
        exit();
    }
    
        $name = $_POST['name']??'';
        $companyName = $_POST['companyName']??'';
        $email = $_POST['email']??'';
        $age = $_POST['age']??'';
        $message = $_POST['message']??'';

        $error = [];

        //バリテーション
        if(!preg_match("/^[ぁ-んァ-ヶーー-龠a-zA-Z\s]+$/",$name)){
            $errors[] = "名前は日本語または英字のみで入力してください。";
        }if(!preg_match("/^[ぁ-んァ-ヶーー-龠a-zA-Z\s]+$/",$companyName)){
            $errors[] = "会社名は日本語または英字のみで入力してください。";
        }if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $errors[] = "メールアドレスは正しい形式で入力してください。";
        }if(!preg_match("/^[0-9]{1,3}$/",$age)){
            $errors[] = "年齢は英数字のみで３文字以内にしてください。";
        }if(empty($message)) {
            $errors[] = "お問い合せ内容を入力してください。";
        }

 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム - 確認画面</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>お問い合わせフォーム - 確認画面</h2>

<div class="container">
<div id="sidebar">
    <ul>
        <li><a href="#section1">トップページ</a></li>
        <li><a href="#section2">人気投稿</a></li>
        <li><a href="#section3">エンジニアおすすめ商品</a></li>
        <li><a href="#section4">エンジニアおすすめ記事</a></li>
        <li><a href="#section4">投稿ページ</a></li>

    </ul>
    </div>

    <div class="main-content">

    <?php if (!empty($errors)): ?>
        <!-- エラーがある場合　-->
         <?php foreach ($errors as $error): ?>
            <p style="color: red;"><?php echo $error; ?></p>
         <?php endforeach; ?>
         <p><button type="button" onclick="history.back()">戻る</button></p>

    <?php else: ?>
    
        <!-- エラーがない場合　（正常な確認画面）　-->

        <table border="3">
            <tr>
               <th>お名前</th>
               <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>

               <tr>
               <th>会社名</th>
               <td><?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>

            <tr>
               <th>メールアドレス</th>
               <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>

            <tr>
               <th>年齢</th>
               <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?></td>
            </tr>

            <tr>
               <th>お問い合せ内容</th>
               <td><?php echo nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8')); ?></td>
            </tr>
        </table>
    
<form action="send.php" method="post">
     <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>">
     <input type="hidden" name="companyName" value="<?php echo htmlspecialchars($companyName, ENT_QUOTES, 'UTF-8'); ?>">
     <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?>">
     <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8'); ?>">
     <input type="hidden" name="message" value="<?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?>">
     
   <p style="margin-bottom:3px;"> <input type = "submit" value = "送信"></p>
   <p style="margin-top:0;"><button type="button" onclick="history.back()">戻る</button></p>
</form>
<?php endif; ?>
    </div>
    </div>
 <div class = "footer">
    </div>
</body>
</html>