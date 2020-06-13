<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>教育システム1</title>
    </head>
    <body>
        
交通費入力画面<br/>
<form method="post" action="fare_check.php">
あなたの名前を登録してください
※登録はフルネームでお願いします<br />
<input type="text" name="name" style="width:200px"><br/>
社員番号を入力して下さい<br />
<input type="text" name="e_num" style="width:200px"><br/>

日にちを入力してください<br/>
<input type="date" name="date" ><br/>
<div class="s_point">
    <p>出発点</p>
    <input type="text" name="s_point" style="width:100px">
</div>
<div class="a_point">
    <p>到着点</p>
    <input type="text" name="a_point" style="width:100px">
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
目的を選んで下さい<br/>
<select name="purpose" ><br/>
    <option value="check">臨店</option>
    <option value="interview">mtg</option>
    <option value="meeting">会議</option>
    <option value="wine">試飲会</option>
    <option value="long">出張</option>
    <option value="etc2">そのた</option>
</select><br/>

<?php $fare=190; ?>
運賃 <?php print $fare; ?>円<br/>
<input type="button" onclick="location.href='correct_fare_list.php'" value="運賃修正">
<input type="button" onclick="history.back()" value="戻る">
<input type="submit" value="登録">

</form>

    </body>
</html>