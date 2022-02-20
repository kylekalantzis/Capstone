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
<h2> View Student Data </h2>
<li>
        <form action="http://localhost/IS/Project/Capstone/view_ind.php">
            <input type="submit" value="View Student"/>
        </form>
        <form action="http://localhost/IS/Project/Capstone/view_all.php">
            <input type="submit" value="View All Students"/>
        </form>
        </li>