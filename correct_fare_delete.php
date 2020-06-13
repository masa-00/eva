
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

登録路線削除 <br/>
登録No<?php print $fareid; ?>
<br/>
出発駅<?php print $depature; ?>
<br/>
到着駅<?php print $arrival; ?>
<br/>
ルート<?php print $route; ?>
<br/>
この路線を削除してもよろしいですか？

<form method="post" action="correct_fare_delete_done.php">

<input type="hidden" name="fareid" value="<?php print $fareid;?>">

<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="登録">
</form>

</body>
</html>
