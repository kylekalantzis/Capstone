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
<h2> Create new Grade entry </h2>
<h2> Repeat Process for multiple classes </h2>
<form action="" method="POST">
    ID: <input type="text" name="id"><br>
    Course ID: <input type="text" name="Course_id"><br>
    Grade: <input type="text" name="Grade"><br>
    Letter: <input type="text" name="Letter"><br>
    <input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["id"];
    $Course_id = $_POST["Course_id"];
    $Grade = $_POST["Grade"];
    $Letter = $_POST["Letter"];

$sql = "INSERT INTO Grades (id, Course_id, Grade, Letter) VALUES ('{$id}', '{$Course_id}', '{$Grade}', '{$Letter}')";
if ($con->query($sql) === TRUE) {
    echo "New Grade has been inputted for Student";
} else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}