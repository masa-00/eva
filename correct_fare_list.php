
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

$dsn='mysql:dbname=kyouiku1;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='SELECT id,departure,arrival,route,fare FROM fare_t WHERE 1';
$stmt=$dbh->prepare($sql);
$stmt->execute();

$dbh=null;

print '登録路線一覧<br/><br/>';
print '<form method="post" action="correct_fare_branch.php">';

while(true)
{
    $rec = $stmt->fetch(PDO::FETCH_ASSOC);
    if($rec==false)
    {
    break;
    }
    print '<input type="radio" name="fareid" value="'.$rec['id'].'">';
    print $rec['departure'].' から'.$rec['arrival'];
    print '●路線'.$rec['route'];
    print '●運賃'.$rec['fare'].'円';
    print '<br/>';
}
print '<input type="submit" name="add" value="追加">';
print '<input type="submit" name="edit" value="修正">';
print '<input type="submit" name="delete" value="削除">';
print '</form>';



}
catch(Exception $e)
{
    print '只今障害により大変ご迷惑をお掛けしております';
    exit();
}

?>
<input type="button" onclick="location.href='fare.php'" value="戻る">

</body>
</html>
