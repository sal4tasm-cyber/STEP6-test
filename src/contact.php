<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お問い合わせフォーム</title>
</head>
<body>
<div id="sidebar">
    <ul>
        <li><a href="#section1">トップページ</a></li>
        <li><a href="#section2">人気投稿</a></li>
        <li><a href="#section3">エンジニアおすすめ商品</a></li>
        <li><a href="#section4">エンジニアおすすめ記事</a></li>
        <li><a href="#section4">投稿ページ</a></li>
    </ul>
</div>
    
<header>
    <h2>お問い合わせフォーム</h2>
</header>

    <form action="confirm.php" method="post" id="contact-form">
        <table border="3">
            <tr>
               <th>お名前</th>
               <td><input type="text" id="name" name="name" size="40"></td>
            </tr>

               <tr>
               <th>会社名</th>
               <td><input type="text" id="companyName" name="companyName" size="40"></td>
            </tr>

            <tr>
               <th>メールアドレス</th>
               <td><input type="text" id="email" name="email" size="40"></td>
            </tr>

            <tr>
               <th>年齢</th>
               <td><input type="text" id="age" name="age" size="40"></td>
            </tr>

            <tr>
               <th>お問い合せ内容</th>
               <td><textarea id="message" name="message"  cols="40" rows="5"  placeholder="お問い合わせ内容"></textarea></td>
            </tr>
        </table>

        <input type="submit" value="送信" id="submit">

    <footer>
        <p>横のボタンを押すとfooderの背景色が変わります</p>
    </footer>

    <button type="button" id="checkButton">押してみてね!</button>
</form>
<script src = "style.js"></script>
</body>
</html>