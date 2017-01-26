<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<!--    <title>データ登録</title>-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>データ登録</h1>

<div class="form">
<form action="output_data.php" method="post">
   <div class="test">
    name: <input type="text" name="name" id="box">
    </div><br>
    <div class="test">
    tel: <input type="text" name="tel" id="box">
    </div><br>
    <div class="test">
    mail: <input type="text" name="mail" id="box">
    </div><br>
    <input type="submit" value="送信" id="button">
</form>
</div>
</body>
</html>