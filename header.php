
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>

<html>
<head lang="en">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Solution</title>
    <link rel="stylesheet" href="CSS/style.css">

    <script>

    function myFunction() 
    {
    var dropdown = document.getElementsByClassName("dropdown-btn");
    var i;

    for (i = 0; i < dropdown.length; i++) {
       dropdown[i].addEventListener("click", function() {
       this.classList.toggle("active");
       var dropdownContent = this.nextElementSibling;
       if (dropdownContent.style.display === "block") {
          dropdownContent.style.display = "none";
       } 
       else {
      dropdownContent.style.display = "block";
      }
     });
    }
    }
	
    
	
    </script>
</head>


<body>
  <div id="bodyheader">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="About.php">About Us</a></li>
    <li><a href="Contact.php">Contact Us</a></li>
  </ul>
  </div>
<!--</header>--> 