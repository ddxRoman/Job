<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form target="_blank" action="../action/header.php" method="post">
<input type="number" name="rwk" placeholder="RWK">
<a href="header.php" > 
    <button type="submit">GO</button>
</a>
</form>

<form target="_blank" action="../action/header.php" method="post">
<input type="number" name="sup" placeholder="SUP">
<a href="header.php" > 
    <button type="submit">GO</button>
</a>
</form>



<script>
function clickPreview() {
  document.getElementById("actionName").value = "PREVIEW";
  var form = document.getElementById("formId");
  form.setAttribute("target", "_blank");
  form.submit();
}
function clickSave() {
  document.getElementById("actionName").value = "SAVE";
  var form = document.getElementById("formId");
  form.removeAttribute("target");
  form.submit();
}
</script>

</body>
</html>