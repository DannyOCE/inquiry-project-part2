<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta name="description" content="Creating Web Applications Lab 10" />
<meta name="keywords" content="PHP, Mysql" />
<title>Quiz supervisor queries</title>

<link rel="icon" href="images/node_logo.webp">
<title>Node JS Manage Page</title>
<link rel="stylesheet" href="styles/style.css">
<link href="styles/responsive.css" rel="stylesheet" />
<link rel="stylesheet" href="styles/quiz.css">
</head>
<body>

<?php
    include_once ("header.inc");
    require_once ("settings.php"); //connection info

    $conn = @mysqli_connect(
        $host,
        $user,
        $pwd,
        $sql_db
    );
    // Checks if connection is successful
    
    
            // close the database connection
            mysqli_close($conn);
           // if successful database connection
?>
<h3 class="subheader">Manage Page</h3>
</body>
<form method="post" action="listall.php" class="manage_form">
    <p><input type="submit" name="all_attempts" value="List All Attempts"></p>
</form>

<form method="post" action="search.php" class="manage_form">
    <p>Enter student number: <input type="text" name="student_number"></p>
    <p><input type="submit" value="Search Student Number Attempt"></p>
</form>

<form method="post" action="search.php" class="manage_form">
    <p>Enter first name: <input type="text" name="first_name"></p>
    <p>Enter last name: <input type="text" name="last_name"></p>
    <p><input type="submit" value="Search Student Name Attempt"></p>
</form>

<form method="post" action="search100.php" class="manage_form">
    <p><input type="submit" value="List Students Who Got 100% On Attempt 1"></p>
</form>

<form method="post" action="search50.php" class="manage_form">
    <p><input type="submit" value="List Students Who Got 50% Or Less On Attempt 2" ></p>
</form>

<form method="post" action="delete.php" action="delete2.php" class="manage_form">
    <p>Enter student number: <input type="text" name="student_number"></p>
    <p><input type="submit" value="Delete"></p>
</form>

<form method="post" action="change.php" action="update.php" class="manage_form">
    <p>Enter student number: <input type="text" name="student_number"></p>
    <p>Enter attempt number: <input type="text" name="number_of_attempts"></p>
    <p><input type="submit" value="Change Score Of Attempt"></p>
</form>
<?php
	    include_once "main_footer.inc";
    ?>
</html>