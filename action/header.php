
<?php
$num=$_POST['rwk'];
if($num!='') {
header('Location: https://jira.csd.com.ua/browse/MEDRWK-'.$num);
}
else{
$num=$_POST['sup'];
if($num!=''){
    
    header('Location: https://jira.csd.com.ua/browse/MEDSUP-'.$num);
}
else {
    header('Location: https://medcloud.csd.com.ua/');
}
}