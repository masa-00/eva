<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>教育システム1</title>
</head>
<body>
<?php

$staff_name=$_POST['name'];
$e_num=$_POST['e_num'];
$date=$_POST['date'];
$s_point=$_POST['s_point'];
$a_point=$_POST['a_point'];
$route=$_POST['route'];
$purpose=$_POST['purpose'];

$staff_name=htmlspecialchars($staff_name,ENT_QUOTES,'UTF-8');
$e_num=htmlspecialchars($e_num,ENT_QUOTES,'UTF-8');
$date=htmlspecialchars($date,ENT_QUOTES,'UTF-8');
$s_point=htmlspecialchars($s_point,ENT_QUOTES,'UTF-8');
$a_point=htmlspecialchars($a_point,ENT_QUOTES,'UTF-8');
$route=htmlspecialchars($route,ENT_QUOTES,'UTF-8');
$purpose=htmlspecialchars($purpose,ENT_QUOTES,'UTF-8');


if($staff_name=='')
{
    print 'スタッフ名が入力されていません<br />';
}
else
{
  print 'スタッフ名:';
  print $staff_name;
  print '<br />';
}

if($e_num=='')
{
    print '社員番号が入力されていません <br/>';
}

if($s_point=='')
{
  print '出発点が入力されていません';
}

if($a_point=='')
{
  print '到着点が入力されていません';
}

if($staff_name==''||$e_num==''||$s_point==''||$a_point=='')
{
  print '<form>';
  print '<input type="button" onclick="history.back()" value="戻る">';
  print '<br />';
}
else
{
  //$staff_pass=md5($staff_pass);
  print '<form method="post" action="fare_done.php">';
  print '<input type="hidden" name="name" value="'.$staff_name.'">';
  print '<input type="hidden" name="e_num" value="'.$e_num.'">';
  print '<input type="hidden" name="date" value="'.$date.'">';
  print '<input type="hidden" name="s_point" value="'.$s_point.'">';
  print '<input type="hidden" name="a_point" value="'.$a_point.'">';
  print '<input type="hidden" name="route" value="'.$route.'">';
  print '<input type="hidden" name="purpose" value="'.$purpose.'">';
  print '<br />';
  print '<input type="button" onclick="history.back()" value="戻る">';
  print '<input type="submit" value="OK">';
  print '</form>';
}

?>
</body>
</html>
