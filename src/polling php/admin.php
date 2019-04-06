<?php


session_start();
if(isset($_SESSION['uname'])){
echo "result";
    echo" <a href='product.php'>product</a> ";
    echo" <a href='logout.php'>logout</a> ";
    echo $_SESSION['uname'];
}

    else{
      
        echo "<script>location.href='login.php'</script>";
    }

?>