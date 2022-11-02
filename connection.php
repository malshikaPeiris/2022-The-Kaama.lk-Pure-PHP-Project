<?php
$con  = mysqli_connect('localhost','root','','kaama.lk');
$link = $con;
if(mysqli_connect_errno())
{
    echo 'Database Connection Error';
}