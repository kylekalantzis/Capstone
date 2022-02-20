<?php
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit;
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
<a href="http://localhost/IS/Project/Capstone/adminhome.php">Go Back</a>
<h2> Modify Student Data </h2>
<li>
        <form action="http://localhost/IS/Project/Capstone/create.php">
            <input type="submit" value="Create New Student"/>
        </form>
<h3> Once new student is created, add additional Data for Student </h3>
        <form action="http://localhost/IS/Project/Capstone/edit_grades.php">
            <input type="submit" value="Edit Grades for Student"/>
        </form>
        <form action="http://localhost/IS/Project/Capstone/edit_billing.php">
            <input type="submit" value="Edit Grades for Student"/>
        </form>
        </li>