<?php
session_start();
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'Kyle1996';
$DATABASE_NAME = 'UNHStudents';
// Verifies XAMPP connection
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
// Login Implementation Author: David Adams
// https://codeshack.io/secure-login-system-php-mysql/
if ( !isset($_POST['username'], $_POST['password']) ) {
	exit('Please fill both the username and password fields!');
}
// Insert new statement here to make vulnerable to SQL injections
if ($sql = $con->prepare('SELECT id, password FROM Users WHERE username = ?')) {
	$sql->bind_param('s', $_POST['username']);
	$sql->execute();
	// Store the result so we can check if the account exists in the database.
	$sql->store_result();
    if ($sql->num_rows > 0) {
        $sql->bind_result($id, $password);
        $sql->fetch();
        // Account exists, now we verify the password.
        if ($_POST['password'] === $password) {
            // Verification success! User has logged-in!
            // Create sessions, so we know the user is logged in, they basically act like cookies but remember the data on the server.
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $_POST['username'];
            $_SESSION['id'] = $id;
            header('Location: studenthome.php');
    } else {
            // Incorrect password
            echo 'Incorrect username and/or password!';
        }
    } else {
        // Incorrect username
        echo 'Incorrect username and/or password!';
    }

	$stmt->close();
}
?>