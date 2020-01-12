 <?php
 
 $host = "localhost";
 $user = "root";
 $password = "";
 $db = "spicy";
 
 mysql_connect($host, $user, $password);
 mysql_select_db($db);
 
 if(isset($_POST['un'])){
      $un = $_POST['un'];
      $psw = $_POST['psw'];
      
      $sql = "select * from loginform where user='".$un."' AND Pass='".$psw."' limit 1";
      
      $result = mysql_query($sql);
      
      if(mysql_num_rows($result) == 1){
            echo " You Have Successfully Logged in";
            exit();
            
      }
      else{
           echo "You have entered the incorrect username or password";
           exit();
      }
 }

 ?>
 
 
 
 <!DOCTYPE html>
 <hmtl>
 <form action="login.php" method="post">

  <div class="container">
    <label for="un"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="un" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#1178ff">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form> 
</html>
