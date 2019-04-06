<?php

$uname="admin";
$pwd="admin";
$cuname=$_POST['uname'];
$cpwd=$_POST['pwd'];


session_start();
if(isset($_SESSION['uname'])){

    echo "<script>location.href='admin.php'</script>";
}
else{
    if($_POST['uname'] && $_POST['pwd']==$pwd){

        $_SESSION['uname']=$uname;
        echo "<script>location.href='validation.php'</script>";
    }
    else{
        header('Location:checkuser.php?id=7');
    }
}

 

?>