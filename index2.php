<?php

echo '<h1>Страницы №2</h1>';



if(isset($_GET['click_id'])){
 
    $click_id = $_GET['click_id'];
}
if(isset($_GET['fb_id'])){
 
    $fb_id = $_GET['fb_id'];
}


echo "<script type='text/javascript'>alert('$click_id');</script>";
echo "<script type='text/javascript'>alert('$fb_id');</script>";
    

