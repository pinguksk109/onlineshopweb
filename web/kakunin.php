<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <script src="main.js"></script>
    <title>SHOP</title>
</head>

<header>
	<!--logo画像-->
	<a href="index.html"><img src="shop.png"></a>
</header>

<body>

<br><br><br>

<a href="tops.html" class="btn-border-bottom">トップス</a>&nbsp;&nbsp;&nbsp;
<a href="jacket.html" class="btn-border-bottom">ジャケット</a>&nbsp;&nbsp;&nbsp;
<a href="pants.html" class="btn-border-bottom">パンツ</a>&nbsp;&nbsp;&nbsp;
<a href="shoes.html" class="btn-border-bottom">シューズ</a>

<br><br>

<a>以下の通りで受けたまりました。</a>

<?php

	//綺麗にしたい
	print $_POST['mono'];
	print $_POST['name_text'];
	print $_POST['address_text'];
	print $_POST['pay'];

	$mono = $_POST['mono'];
	$name_text = $_POST['name_text'];
	$address_text = $_POST['address_text'];
	$pay = $_POST['pay']
	
?>

<h3>ご利用ありがとうございました。</h3>

<a href="index.html" class="btn-gradient-radius">トップに戻る</a>

</body>
</html>