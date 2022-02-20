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
$ID = $_SESSION['id'];
$sql = "SELECT id, Name, Phone_number, Address, Email, DOB, Major, Year FROM Students WHERE id=${ID}";
$result = $con->query($sql);
if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>ID: " . $row["id"]  . "<br>Name: " . $row["Name"] . "<br> Phone Number: " . $row["Phone_number"].
        "<br> Address: " . $row["Address"] . "<br> Email: " . $row["Email"] . "<br> DOB: " . $row["DOB"] . 
        "<br> Major: " . $row["Major"] . "<br> Year: " . $row["Year"];
        }
    }
?>

