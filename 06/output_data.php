<?php
$date = date("Y/m/j H:i:s");
$name = $_POST["name"];
$tel = $_POST["tel"];
$mail = $_POST["mail"];
?>

<!DOCTYPE html>
<html lang="en">
<header>
    <script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>
    <script src="http://jsgt.org/lib/jquery/plugin/csv2table/v002/js/jquery.csv2table-0.02-b-4.7.js" type="text/javascript" charset="utf-8"></script>
</header>
<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <h1>登録データ一覧</h1>
   <div id="graph"></div>
   
   
<!--   登録件数の表示や、日付ごとの登録者数をグラフで表示したい-->

</body>
<script>
    
    //文字化け対策
    //以下ではできずコメントアウト
//    $.ajaxSetup({
//        beforeSend: function(xhr, settings){
//        if (settings.url.endsWith(".csv"))
//            xhr.overrideMimeType("text/csv;charset=Shift_JIS");
//    }
//    });
    
    
    $(function(){
        $('#graph').csv2table('data/data.csv');
    });
</script>

<?php
    $str = $date.",".$name.",".$tel.",".$mail;
    $file = fopen("data/data.csv","a");
    flock($file, LOCK_EX);
    fwrite($file, $str."\n");
    flock($file, LOCK_UN);
    fclose($file);
?>


</html>