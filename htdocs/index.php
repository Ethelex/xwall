<?php error_reporting(E_ALL); ?>
<!DOCTYPE html>
<html>
<head>
<title>XWall</title>
<link href="./css/theme.css" rel="stylesheet">
<link href="./css/base.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$('document').ready(() => {
    $('div#wall').load('/util/get.php');
});
</script>
</head>
<body>
<table>
<tr>
<td>
<div id="builder">
<b>Post builder</b><br><br>
<form method="post" action="./util/post.php">
<textarea name="message" id="builder-message" placeholder="Max 200 characters" rows="10" cols="19" maxlength="200"></textarea><br><br>
Color: <input name="color" id="builder-color" type="color"><br><br>
<input id="postBtn" type="submit" value="Post">
</form>
</div>
</td>
<td><div id="wall"></div></td>
</tr>
</table>
</body>
