
<?php
$num=$_POST['rwk'];
if($num>0) {
    header('Location: https://client'.$num.'.lab.helsi.pro/');
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