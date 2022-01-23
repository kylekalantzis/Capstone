<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Kyle1996";
$database = "UNHStudents";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected to the UNH Database";  
?>

<!DOCTYPE HTML>
<HEAD>
<link rel="stylesheet" href="http://localhost/IS/Project/Capstone/studenthome.css?v=<?php echo time(); ?>">
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
