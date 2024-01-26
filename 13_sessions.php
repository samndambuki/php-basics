<?php
//sessions - a way to store info in the server in variables
//to be used accross multiple pages

//store user id to get their blog post

session_start();

if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];

    if($username=="sam" && $password="password"){
        //set session variable
        $_SESSION['username'] = $username;
        //redirect
        header('Location: /php_basics/extras/dashboard.php');
    }
    else{
        echo 'Incorrect login';
    }
}

?>

<!-- action="" - the form we want to submit to -->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> 

<div>
    <label for="username">Username:</label>
    <input type="text" name="username">
</div>

<div>
    <label for="password">Password:</label>
    <input type="password" name="password">
</div>

<input type="submit" value="submit" name="submit">

</form>

