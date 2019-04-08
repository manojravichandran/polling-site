<?php

$uname="admin";
$pwd="admin";



session_start();
if(isset($_SESSION['uname'])){
    
    echo "<script>location.href='admin.php'</script>";
}
else{
    if($_POST['uname']==$uname && $_POST['pwd']==$pwd){

        $_SESSION['uname']=$uname;
        echo "<script>location.href='validation.php'</script>";
       
    }
    else{
        
        header('Location:login.php');
    }
}


?>