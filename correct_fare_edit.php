
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>教育システム1</title>
</head>
<body>

<?php

try
{

$fareid=$_GET['fareid'];

$dsn='mysql:dbname=kyouiku1;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT departure,arrival,route,fare FROM fare_t WHERE id=?';
$stmt=$dbh->prepare($sql);
$data[]=$fareid;
$stmt->execute($data);

$rec = $stmt->fetch(PDO::FETCH_ASSOC);
$depature = $rec['departure'];
$arrival = $rec['arrival'];
$route = $rec['route'];
$fare= $rec['fare'];

$dbh=null;

}
catch(Exception $e)
{
    print '只今障害により大変ご迷惑をお掛けしております';
    exit();
}

?>

登録路線修正 <br/>
登録No<?php print $fareid; ?>
<br/>
<form method="post" action="correct_fare_edit_check.php">

<input type="hidden" name="fareid" value="<?php print $fareid;?>">

<div class="departure">
    <p>出発点</p>
    <input type="text" name="departure" style="width:100px" value="<?php print $depature ;?>"><br/>
</div>
<div class="arrival">
    <p>到着点</p>
    <input type="text" name="arrival" style="width:100px"  value="<?php print $arrival ;?>"><br/>>
</div>
ルートを選んで下さい<br/>
<select name="route" ><br/>
    <option value="jr">JR</option>
    <option value="subway">地下鉄</option>
    <option value="etc">その他電車</option>
    <option value="bus">バス</option>
    <option value="express">新幹線</option>
    <option value="airplane">飛行機</option>
</select><br/>

運賃 は？<br/>
<input type="text" name="fare" style="width:200px" value="<?php print $fare ;?>"><br/>
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="登録">
</form>

</body>
</html>
