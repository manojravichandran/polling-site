<?php

$uname="admin";
$pwd="admin";
$cuname=(isset($_POST['uname']));
$cpwd=(isset($_POST['pwd']));


session_start();
if(isset($_SESSION['uname'])){


    echo" <a href='logout.php'>logout</a> ";
}
else{
    if($cuname==$uname && $cpwd==$pwd){

        $_SESSION['uname']=$uname;
        echo "<script>location.href='validation.php'</script>";
       
    }
    else{
        header('Location:login.php');
    }
}

 

?>