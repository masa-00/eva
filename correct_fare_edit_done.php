
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

$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$route=$_POST['route'];
$fare=$_POST['fare'];
$fareid=$_POST['fareid'];

$departure=htmlspecialchars($departure,ENT_QUOTES,'UTF-8');
$arrival=htmlspecialchars($arrival,ENT_QUOTES,'UTF-8');
$fare=htmlspecialchars($fare,ENT_QUOTES,'UTF-8');


$dsn='mysql:dbname=kyouiku1;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='UPDATE fare_t SET departure=?,arrival=?,route=?,fare=? WHERE id=?';
$stmt=$dbh->prepare($sql);
$data[]=$departure;
$data[]=$arrival;
$data[]=$route;
$data[]=$fare;
$data[]=$fareid;
$stmt->execute($data);

$dbh=null;

}
catch(Exception $e)
{
    print '只今障害により大変ご迷惑をお掛けしております';
    exit();
}

?>

修正しました <br/>
<br/>
<a href="correct_fare_list.php">戻る</a>

</body>
</html>
