
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

    $staff_name=$_POST['name'];
    $e_num=$_POST['e_num'];
    $date=$_POST['date'];
    $s_point=$_POST['s_point'];
    $a_point=$_POST['a_point'];
    $route=$_POST['route'];
    $purpose=$_POST['purpose'];
    
    $staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
    $e_num=htmlspecialchars($e_num,ENT_QUOTES,'UTF-8');
    $s_point=htmlspecialchars($s_point,ENT_QUOTES,'UTF-8');
    $a_point=htmlspecialchars($a_point,ENT_QUOTES,'UTF-8');

$dsn='mysql:dbname=kyouiku1;host=localhost;charset=utf8';
$user='root';
$password='';
$dbh=new PDO($dsn,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql='INSERT INTO t_expenses(name,e_num,date,s_point,a_point,route,purpose) VALUE (?,?,?,?,?,?,?)';
$stmt=$dbh->prepare($sql);
$data[]=$staff_name;
$data[]=$e_num;
$data[]=$date;
$data[]=$s_point;
$data[]=$a_point;
$data[]=$route;
$data[]=$purpose;
$stmt->execute($data);

$dbh=null;

print $staff_name;
print 'さん<br />';
print '社員番号　'.$e_num;
print '<br />';
print $date;
print '<br />';
print $s_point.'から'.$a_point;
print '<br />';
print $route;
print '<br />';
print $purpose;
print 'を追加しました　<br />';

}
catch(Exception $e)
{
    print '只今障害により大変ご迷惑をお掛けしております';
    exit();
}

?>

<a href="fare.php">戻る</a>

</body>
</html>
