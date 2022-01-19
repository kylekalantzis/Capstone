<?php
$servername = "127.0.0.1";
$username = "root";
$password = "Kyle1996";
$database = "UNHStudents";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to the UNH Database";  
?>
<!DOCTYPE HTML>
<HEAD>
<link rel="stylesheet" href="http://localhost/IS/Project/Capstone/index.css?v=<?php echo time(); ?>">
<meta charset = "UTF-8">
<meta http-equiv ="X-UA-Compatible" content="IE=edge">
<meta name = "viewport" content = "width=device-width, initial-scale = 1.0">
</head>
<body>
    <div class="logo">
    <img src="imgs/unh.png" alt="unh">
</div>
    <div class="login">
        <label for="username"><b>Username:</b></label>
        <input type="text" placeholder="Enter Username" required>

        <label for="password"><b>Password:</b></label>
        <input type="text" placeholder="Enter Password" required>

        <button type="submit">Login</button>
</div>