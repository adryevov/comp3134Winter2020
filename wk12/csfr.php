<?php
$username = $_POST['username'];
$password = $_POST['password'];
$showForm = true;
if(isset($_POST['password']) && isset($_POST['username'])){
  $showForm = false;
  if($username === 'host' && $password === 'pass'){
	echo "<div>Successfully logged in!</div>";
  }
  else {
	echo "<div>Wrong credentials! Please try again.</div>";
 }
}
if($showForm){
?>
<form action="csfr.php" method="POST">
	<label for="username"><b>Username</b></label>
	<input type="text" placeholder="Enter Username" name="username" required>
	<label for="password"><b>Password</b></label>
	<input type="password" placeholder="Enter Password" name="password" required>
    	<button type="submit">Login</button>
</form>
<?php
}
?>