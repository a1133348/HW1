<html>
<head>
<title>夏令營報名表單</title>
<body bgcolor=papayawhip>

</head>

<body>

<form>

<center><B><I><font size=80 color=black>夏令營報名表單</font></center>
<hr>
<br>

<center>姓名:
<input type="text" name="nName" placeholder="Your name">
<br><br>

電話:
<input type="text" name="nNumber" placeholder="Your number">
<br><br>

性別:
男<input type="radio" name="mGender" value="m">
女<input type="radio" name="mGender" value="f">
<br><br>

生日:
<input type="date" name="mDate">
<br><br>

年紀:
<input type="number" name="mNumber" min="1" max="100">
<br><br>

Email:
<input type="email" name="mEmail">
<br><br>

你來自哪個地區?
<select name="ndistrict">
<option value="North">北部</option>
<option value="Center">中部</option>
<option value="South">南部</option>
<option value="East">東部</option>
<option value="Land">離島</option>
</select>
<br><br>

有興趣的項目:<br>
第一階段:籃球<input type="checkbox" name="mInterest" value="basketball"><br>
第二階段:棒球<input type="checkbox" name="mInterest" value="baseball"><br>
第三階段:羽球<input type="checkbox" name="mInterest" value="badminton"><br>
<br>

病史:<br>
有<input type="radio" name="msick" value="y">
無<input type="radio" name="msick" value="n">
<br><br>

備註:<br>
<textarea name="comment" rows="5" cols="40"></textarea>
<br><br>

<input type="submit" value="送出">
<input type="submit" value="重填"><center>

</form>

</body>
</html>