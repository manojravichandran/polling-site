<?php

$cuname = $_POST["uname"];
$cpwd = $_POST["pwd"];


$uname="admin";
$pwd="admin";
$mj="mj";
$cmj="mj";
$c = mysqli_connect("localhost","root","");
if($a = mysqli_select_db($c,'votepool')){
     
     
    $result = mysqli_query($c,"select * from users where id='$cuname' and password='$cpwd'");
    while($row = mysqli_fetch_array($result)){
       echo "ADMIN IRUKU";
}

}
 



session_start();
if(isset($_SESSION['uname'])){

    echo "<br>";
    echo" <a href='logout.php'>logout</a> ";
    echo "<br>";
    echo "the user is ";
  
    echo $cuname;
    echo $cpwd;
}
else{
    if($cuname==$uname && $cpwd==$pwd){

        $_SESSION['uname']=$uname;
        echo "<script>location.href='chekuser.php'</script>";
       
    }
    else{
        header('Location:login.php');
    }
}



?>