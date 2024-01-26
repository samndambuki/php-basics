<?php

// echo $_POST['name'];
// echo $_POST['age'];

if(isset($_POST['submit'])){
    // $name = filter_input(INPUT_POST,'name',FILTER_SANITIZE_SPECIAL_CHARS);

    // $age = filter_input(INPUT_POST,'age',FILTER_SANITIZE_SPECIAL_CHARS);

    // $name = 

    echo $name;
}

?>

<!-- action="" - the form we want to submit to -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> 

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

