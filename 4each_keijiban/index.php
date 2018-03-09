<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet"type="text/css"href="style.css">
</head>
    
    
<body>
 <img src="4eachblog_logo.jpg" width="250px" height="80px">
 <header>
 <ul>
<li>トップ</li>
<li>プロフィール</li>
<li>4eachについて</li>
<li>登録フォーム</li>
<li>問い合わせ</li>
<li>その他</li>
</ul>

</header>
<main>
<div class="main-container">
    <div class="left">
    <h1>プログラミングに役立つ掲示板</h1>
    <div class="form">
    <h3>入力フォーム</h3>
    <form method="post" action="insert.php">
    
    <div>
        <label>ハンドルネーム</label>
    　　<br>
        <input type="text"class="text"name="handlename">
        </div>
        <div>
        <label>タイトル</label>
    　　<br>
        <input type="text"class="text"name="title">
        </div>
    <div>
    <label>コメント</label>
    <br>
    <textarea cols="50" rows="7" name="comments"></textarea>
    <br>
    <input type="submit"class="submit"value="投稿する">
    </div>
        
    </form>
        </div>
    
    </div>
    <div class="right"></div>
    </div>    
</main>
</body>
</html>