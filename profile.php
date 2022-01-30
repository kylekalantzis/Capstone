<?php
session_start();
// Checks if User is logged in
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
}
$DATABASE_HOST = '127.0.0.1';
$DATABASE_USER = 'root';
$DATABASE_PASS = 'Kyle1996';
$DATABASE_NAME = 'UNHStudents';
// Connects to XAMPP
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>

<!DOCTYPE HTML>
<HEAD>
<link rel="stylesheet" href="http://localhost/IS/Project/Capstone/profile.css?v=<?php echo time(); ?>">
<meta charset = "UTF-8">
<meta http-equiv ="X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
</head>
        <ul>
            <li><a href="studenthome.php">Home</a></li>
            <li><a href="grades.php">Grades</a></li>
            <li><a href="billing.php">Billing</a></li>
            <li><a href="profile.php">Profile</a></li>
            <img src="imgs/logo.png" alt="logo">
</ul>
<h1> Account Information </h1>
</tr>
<div class
<?php
$stmt = $con->prepare('SELECT Name, Phone_number, Address, Email, DOB, Major, Year FROM Students WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($Name, $Phone_number, $Address, $Email, $DOB, $Major, $Year);
$stmt->fetch();
$stmt->close();
echo "<br> Name: ". $Name . "<br> Phone Number: " .  $Phone_number . "<br> Address: " . $Address . 
"<br> Email: " . $Email . "<br> Date of Birth: " . $DOB . "<br> Major: " . $Major . "<br> Year: " . $Year;
?>

