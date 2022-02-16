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

<h1> Welcome UNHM Admin </h1>

<p> Please selection an option: </p>
<!-- <div class = "list">
    <div>
        <list>
</div> -->
    <li>
        <form action="http://localhost/IS/Project/Capstone/view_home.php">
            <input type="submit" value="View Data"/>
        </form>
        <form action="ttp://localhost/IS/Project/Capstone/modify_home.php">
            <input type="submit" value="Modify Data"/>
        </form>
        <!-- </div> -->
</list> 
<br>




<form action="http://localhost/IS/Project/Capstone/">
    <button type="submit">Logout</button>
</form>