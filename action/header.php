
<?php
$num=$_POST['rwk'];
if($num>0) {
header('Location: https://jira.csd.com.ua/browse/MEDRWK-'.$num);
}
else{
$num=$_POST['sup'];
if($num>0){
    
    header('Location: https://miswiki.atlassian.net/browse/LAB-'.$num);
}
else {
    header('Location: https://medcloud.csd.com.ua/');
}
}