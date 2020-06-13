<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>教育システム1</title>
    </head>
    <body>
        
交通費入力画面<br/>
<form method="post" action="correct_fare_add_check.php">

<div class="departure">
    <p>出発点</p>
    <input type="text" name="departure" style="width:100px">
</div>
<div class="arrival">
    <p>到着点</p>
    <input type="text" name="arrival" style="width:100px">
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
<input type="text" name="fare" style="width:200px"><br/>

<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="登録">
</form>

    </body>
</html>