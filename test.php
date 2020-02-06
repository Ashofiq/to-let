<?php 
	if (isset($_POST['submit'])) {
		echo $_POST['c'];
	}

?>

<!DOCTYPE html>
<html>
<body>

<form method="post">

  <input type="submit" name="submit" value="Submit">

  <select name="c">
  	<option>c</option>
  	<option>d</option>
  </select>

</form>

</body>
</html>
