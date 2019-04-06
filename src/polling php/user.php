<?php


session_start();
if(isset($_SESSION['uname'])){
echo "user";
    echo" <a href='product.php'>product</a> ";
    echo" <a href='logout.php'>logout</a> ";
    echo "sfa";
}

    else{
      
        echo "<script>location.href='login.php'</script>";
    }

?>