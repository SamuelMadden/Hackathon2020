<!DOCTYPE html>
  <form action="signup.php" style="border:1px solid #ccc">
  
  <div>
    <?php
    
    $db_user = "root";
    $db_password = "";
    $db_name = "spicy";
    
    $db = new PDO('mysql:host=localhost;dbname=' . $db_name . ';charset=utf8', $db_user, $db_pass);
    $db->setAttribute(PDO:ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    if(isset($_POST['create'])){
        
        $un = $_POST['un'];
        $psw = $_POST['psw'];
        
        $sql = "INSERT INTO users (un, psw) VALUES(?, ?)";
        $stmtinsert = $db->prepare($sql);
        $result = $stmtinsert->execute([$un, $psw]);
        if($result){
              echo 'Successfully saved.';
        }
        else{
              echo 'There were errors while saving the data';
        }
        
        
    }
    
    
    ?>
  
  </div>
  
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    
    <label for="un"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="un" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="create">Sign Up</button>
    </div>
  </div>
</form> 
 </html>
