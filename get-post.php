<?php


if (isset($_POST['submit'])) {
  echo '<h3>' . $_POST['name'] . '</h3>';
}
echo '<h3>' . $_GET['username'] . '</h3>';

?>

<!-- Pass data through a link -->


<a href="<?php echo $_SERVER['PHP_SELF']; ?>?username=nowfel">Link</a>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>