<?php
$ticket=$_POST['ticket'];
echo $ticket;
if($ticket>0){
    echo"IF";
    header('Location: https://helper.bizonoff-dev.net/admin/projects/medcloud/boards/razrabotka-medklaud/tickets/'.$ticket);
}else{
  header('Location: https://helper.bizonoff-dev.net/admin/projects/medcloud/boards/razrabotka-medklaud?display=list&by_desc=true&create=true');
    echo"ELSE";
}
?>