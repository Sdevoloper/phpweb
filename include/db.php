<?php
$db=mysqli_connect("remotemysql.com","AI12KXeUaX","Lm35bRUnWu","AI12KXeUaX");
if($db){
    echo "databse is connected !";
}else{
   echo "something is wrong with database !";
}