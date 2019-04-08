<?php
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];

//prevent mysql injection
$uname=stripcslashes($uname);
$pwd=stripcslashes($pwd);


$conn=mysqli_connect("localhost","root","");
mysqli_select_db($conn,"votepool");

$result=mysqli_query($conn,"select * from users where id='$uname' and password='$pwd'") or die("cannot connect".mysql_error());
$row=mysqli_fetch_array($result);

session_start();
if(isset($_SESSION['uname'])){
    

    header('location:user.php');

}
else{
    if($row['id']==$uname && $row['password']==$pwd){

        $_SESSION['uname']=$uname;
        
      

        echo "<script>location.href='chekuser.php'</script>";
       
    }
    else{
        
        header('Location:login.php');
    }
}




?> 