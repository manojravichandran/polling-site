<?php


session_start();
if(isset($_SESSION['uname'])){
    echo "session is ".$_SESSION['uname']."here";
    echo" <a href='logout.php'>logout</a> ";
    echo" <a href='product.php'>product</a> ";
}

    else{
      
        echo "<script>location.href='login.php'</script>";
    }

?>