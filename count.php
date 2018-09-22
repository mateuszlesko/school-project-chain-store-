<?php
if(!isset($_COOKIE['visits'])){

    $_COOKIE['visits']=0;

}
$visits = $_COOKIE['visits']+1;
setcookie('visits',$visits,time()+3600*24);
if($visits >1 ){
    $showValue = 'twoja wizyta nr'.$visits;
}
else{
    $showValue = 'pierwsza wizyta';
}
include 'count.html.php';
?>