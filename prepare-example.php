<?php
//Code starts from here
$server = "localhost";
$username = "root";
$password = "";
$db = "test";
/**
 * Create Connection
 */
$conn = new mysqli( $server, $username, $password, $db );
/**
 * Database Connection Check
 */
if ( !$conn ) {
    echo "Connect Database Again";
} else {
    echo "Connection Success.";
}


$stmt = $conn->prepare("INSERT INTO user(email, username, password) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $email, $password);


/**
* Set Parameter
*/
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if ( isset ( $_POST['submit'] ) ) {
    $stmt->bind_param("sss", $email, $username, $password);
    $stmt->execute();
    header("location: dashboard.php");
} else {
    echo "Can Not Save Data";
}
?>

<br>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
    Email: <input type="text" name="email"><br>
    User Name: <input type="text" name="username"><br>
    Passowrd: <input type="text" name="password"><br>
    <input type="submit" name="submit">
</form>