<?
error_reporting(E_ERROR | E_PARSE);
$connect = mysqli_connect('localhost', 'root','','medcloud');
if(!$connect){
  ?>   
   <style>
        .header{
            border: 2px solid  rgb(247, 0, 0);
        }
    </style><? 
}
else{ ?>
<style>
.header{
    border: 2px solid  rgb(57, 182, 67);
        }
        </style>
        
  <?}

