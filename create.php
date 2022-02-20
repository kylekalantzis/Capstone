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
<link rel="stylesheet" href="http://localhost/IS/Project/Capstone/crud.css?v=<?php echo time(); ?>">
<meta charset = "UTF-8">
<meta http-equiv ="X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
</head>
<ul>    
<img src="imgs/logo.png" alt="logo">
</ul>
<body>
<a href="http://localhost/IS/Project/Capstone/modify_home.php?">Go Back</a>
<h2> Create new Student entry </h2>
<form action="" method="POST">
    Name: <input type="text" name="Name"><br>
    Phone Number(0000000000 Format): <input type="text" name="Phone_number"><br>
    Address: <input type="text" name="Address"><br>
    Email: <input type="text" name="Email"><br>
    DOB: <input type="text" name="DOB"><br>
    Major: <input type="text" name="Major"><br>
    Year: <input type="text" name="Year"><br>
    <input type="submit">
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name = $_POST["Name"];
    $Phone_number = $POST["Phone_number"];
    $Address = $_POST["Address"];
    $Email = $_POST["Email"];
    $DOB = $_POST["DOB"];
    $Major = $_POST["Major"];
    $Year = $_POST["Year"];

    $sql = "INSERT INTO Students (Name, Phone_number, Address, Email, DOB, Major, Year) 
    VALUES ('{$Name}', '{$Phone_number}', '{$Address}', '{$Email}', '{$DOB}', '{$Major}', '{$Year}')";
    if ($con->query($sql) === TRUE) {
        echo "New Student has been added to the database";
    } else {
        Echo "Error:" . $sql . "<br>" . $con->error;
    }
} 