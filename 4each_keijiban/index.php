<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>4eachblog 掲示板</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
    
    
<body>
<?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","mysql");
    $stmt = $pdo->query("select*from 4each_keijiban");
    
    
    ?>
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
    <?php
    while($row = $stmt->fetch()){
	
    echo "<div class='title1'>";
    echo "<h3>".$row['title']."</h3>";
    echo "<div class='contents'>";
    echo $row['comments'];
    echo "<div class='postname'>投稿者".$row['handlename']."</div>";
    echo "</div>";
	echo "</div>";
	}
		
	?>
    </div>
    </div>
    <div class="right">
    <div class="favorite">
    <h3>人気の記事</h3>
    <ul>
    <li>PHPオススメ本</li>
    <li>PHP MyAdminの使い方</li>
    <li>いま人気のエディタTop5</li>
    <li>HTTMLの基礎</li>
    </ul>
    </div>
    <div class="recomend">
    <h3>オススメリンク</h3>
    <ul>
    <li>インターノウス株式会社</li>
    <li>XAMPPのダウンロード</li>
    <li>Eclipseのダウンロード</li>
    <li>Braketsのダウンロード</li>
    </ul>
    </div>
    <div class="category">
    <h3>カテゴリ</h3>
    <ul>
    <li>HTML</li>
    <li>PHP</li>
    <li>MySQL</li>
    <li>JavaScript</li>
    </ul>
     </div>
    </div>
    <footer>copyright internous | 4each blog is the one which provides A to Z about programming.</footer>  
</main>
</body>
</html>