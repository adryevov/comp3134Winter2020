<body onload="completedForm()">
<?php
session_start();
$_SESSION["confirmation"] = rand(0,100);
?>
    <form action="csfr_action.php" method="POST">
        <label for="username">Username:</label><br>
        <input type="text" name="username" value="host"><br>
        <label for="password">Password:</label><br>
        <input type="text" name="password" value="pass"><br><br>
        <input type="hidden" name ="confirmation" value="<?php echo $_SESSION["confirmation"] ?>">
        <button id ="submit" type="submit" value="Submit">
      </form> 
</body>
<script>
function completedForm() {
    document.getElementById("submit").click();
  }
</script>