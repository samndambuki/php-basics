<?php

echo $_POST['name'];
echo $_POST['age'];
?>

<!-- PHP_SELF - the file we are in -->
<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30">click</a>


<!-- action="" - the form we want to submit to -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"> 

<div>
    <label for="name">Name:</label>
    <input type="text" name="name">
</div>

<div>
    <label for="age">Age:</label>
    <input type="text" name="age">
</div>

<input type="submit" value="submit" name="submit">

</form>

