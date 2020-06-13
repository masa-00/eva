<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>教育システム1</title>
</head>
<body>
<?php

$departure=$_POST['departure'];
$arrival=$_POST['arrival'];
$route=$_POST['route'];
$fare=$_POST['fare'];

$departure=htmlspecialchars($departure,ENT_QUOTES,'UTF-8');
$arrival=htmlspecialchars($arrival,ENT_QUOTES,'UTF-8');
$fare=htmlspecialchars($fare,ENT_QUOTES,'UTF-8');


if($departure=='')
{
    print '出発地点が入力されていません<br />';
}

if($arrival=='')
{
    print '到着地点が入力されていません <br/>';
}

if($fare=='')
{
  print '運賃が入力されていません';
}

if($departure==''||$arrival==''||$fare=='')
{
  print '<form>';
  print '<input type="button" onclick="history.back()" value="戻る">';
  print '<br />';
}
else
{
  //$staff_pass=md5($staff_pass);
  print '<form method="post" action="correct_fare_add_done.php">';
  print '<input type="hidden" name="departure" value="'.$departure.'">';
  print '<input type="hidden" name="arrival" value="'.$arrival.'">';
  print '<input type="hidden" name="route" value="'.$route.'">';
  print '<input type="hidden" name="fare" value="'.$fare.'">';
  print '<br />';
  print '<input type="button" onclick="history.back()" value="戻る">';
  print '<input type="submit" value="OK">';
  print '</form>';
}

?>
</body>
</html>
