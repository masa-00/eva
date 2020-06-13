
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

$fareid=$_POST['fareid'];

$dsn='mysql:dbname=kyouiku1;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='DELETE FROM fare_t WHERE id=?';
$stmt=$dbh->prepare($sql);
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

削除しました <br/>
<br/>
<a href="correct_fare_list.php">戻る</a>

</body>
</html>
