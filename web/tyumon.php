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

<form name="shop_form" method = "POST" action="kakunin.php">

<h3>選んだ服を選択してください</h3>
<input type="radio" name="mono" value="1">トップス1
<input type="radio" name="mono" value="2">トップス2
<br>
<input type="radio" name="mono" value="3">ジャケット1
<input type="radio" name="mono" value="4">ジャケット2
<br>
<input type="radio" name="mono" value="5">パンツ1
<input type="radio" name="mono" value="6">パンツ2
<br>
<input type="radio" name="mono" value="7">シューズ1
<input type="radio" name="mono" value="8">シューズ2
<br>


<h3>名前を入力してください</h3>
お名前：<input type="text" name="name_text">

<h3>住所を入力してください</h3>
住所：<input type="text" name="address_text">

<h3>支払い方法を選択してください</h3>
<input type="radio" name="pay" value="1">コンビニ支払い
<input type="radio" name="pay" value="2">着払い
<p>コンビニ支払いは、ローソンとファミリーマートで支払いが可能です。<br>着払いは、着払手数料として300円かかります。</p>

<input type="submit" name="add" value="買う" class="btn-gradient-radius">

<br><br>

<a href="index.html" class="btn-gradient-radius">トップに戻る</a>

</body>
</html>