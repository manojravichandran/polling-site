<form action="chekuser.php" method="post">
    <div class="imgcontainer">
     
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" id="uname" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pwd"  id="pwd" required>
      
      <input type="submit" value="submit" id="btn" name="submit">
      <label>
     
      </label>
    </div>

    
  </form>
<?php 
  echo" <a href='adminlogin.php'>admin</a> ";
?>