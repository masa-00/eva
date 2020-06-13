
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

$departure=htmlspecialchars($departure,ENT_QUOTES,'UTF-8');
$arrival=htmlspecialchars($arrival,ENT_QUOTES,'UTF-8');
$fare=htmlspecialchars($fare,ENT_QUOTES,'UTF-8');


$dsn='mysql:dbname=kyouiku1;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO fare_t(departure,arrival,route,fare) VALUE (?,?,?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$departure;
$data[]=$arrival;
$data[]=$route;
$data[]=$fare;
$stmt->execute($data);

$dbh=null;

print $departure.'から'.$arrival;
print '<br />';
print $route;
print '<br />';
print $fare;
print 'を追加しました　<br />';

}
catch(Exception $e)
{
    print '只今障害により大変ご迷惑をお掛けしております';
    exit();
}

?>

<a href="correct_fare_list.php">戻る</a>

</body>
</html>
