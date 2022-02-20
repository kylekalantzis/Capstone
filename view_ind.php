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
?>
<!DOCTYPE HTML>
<HEAD>
<link rel="stylesheet" href="http://localhost/IS/Project/Capstone/adminhome.css?v=<?php echo time(); ?>">
<meta charset = "UTF-8">
<meta http-equiv ="X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
</head>
<ul>    
<img src="imgs/logo.png" alt="logo">
</ul>
<a href="http://localhost/IS/Project/Capstone/view_home.php">Go Back</a>
<form action="" method="POST">
    ID: <input type="number" name="id"><br>
    <input type="submit">
</form>
<?php
if ($_SERVER ["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $sql = "SELECT id, Name, Phone_number, Address, Email, DOB, Major, Year FROM Students WHERE id=${id}";
    $result = $con->query($sql);
    if($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<br>ID: " . $row["id"]  . "<br>Name: " . $row["Name"] . "<br> Phone Number: " . $row["Phone_number"].
            "<br> Address: " . $row["Address"] . "<br> Email: " . $row["Email"] . "<br> DOB: " . $row["DOB"] . 
            "<br> Major: " . $row["Major"] . "<br> Year: " . $row["Year"];
        }
    }}
?>
<?php
$sql = "SELECT id, Social, Amount_owed FROM Financial WHERE id=${id}";
$result = $con->query($sql);
if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>Social: " . $row["Social"] . "<br>Bill: $" . $row["Amount_owed"];
    }
} else {
    echo "Database Empty" ;
}
?>
<?php
$sql = "SELECT id, Course_id, Grade, Letter FROM Grades WHERE id=${id}";
$result = $con->query($sql);
if($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<br>Course: " . $row["Course_id"] . "<br> Grade: " .  $row['Grade'] . " | " . $row['Letter'];
    }
} else {
    echo "Database Empty" ;
}


?>