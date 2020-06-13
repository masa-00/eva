<?php

if(isset($_POST['add'])==true)
{
    header('Location: correct_fare_add.php');
    exit();
}

if(isset($_POST['edit'])==true)
{
    if(isset($_POST['fareid'])==false)
    {
        header('Location: correct_fare_ng.php');
        exit();
    }
    $fareid=$_POST['fareid'];
    header('Location: correct_fare_edit.php?fareid='.$fareid);
    exit();
}

if(isset($_POST['delete'])==true)
{
    if(isset($_POST['fareid'])==false)
    {
        header('Location: correct_fare_ng.php');
        exit();
    }
    $fareid=$_POST['fareid'];
    header('Location: correct_fare_delete.php?fareid='.$fareid);
    exit();
}

?>