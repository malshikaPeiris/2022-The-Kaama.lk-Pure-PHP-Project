<?php
$con  = mysqli_connect('localhost','janindu','123janindu','kaama.lk');
$link = $con;
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}