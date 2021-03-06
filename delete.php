<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/> 
    <title>Student delete</title>
    <meta name="description" content="Confirm delete function PHP">
    <meta name="keywords" content="PHP, HTML, MYSQL, Manage page">
    <meta name="author" content="Adam Horvath, Sam Green"/>
    <meta name="date" content="Last Modified: 26/5/22"/>
    <!-- other meta here -->
    <link rel="icon" href="images/node_logo.webp">
    <link rel="stylesheet" href="styles/style.css">
    <link href="styles/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" href="styles/sidepage.css">
</head>
<body>
<?php


require_once "settings.php";
$conn = @mysqli_connect($host,
$user,
$pwd,
$sql_db
);

if ($conn) {
    if (isset($_POST["student_number"])){
        $student_number=$_POST["student_number"];
        if (($student_number > 9999999) && ($student_number <1000000000)){
            echo "<p>The student number has to be either 7 or 10 characters</p>";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
        }
        elseif ($student_number == ""){
            echo "<p>You have not entered a student number</p>";
            echo "<form method='post' action='manage.php'>";
            echo "<p><input type='submit' value='Return to Manage Quiz Queries'></p>";
            echo "</form>";
        }
        else{
        $query = "SELECT * FROM attempts WHERE student_number=$student_number";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo "<p>Something is wrong with ", $query, "</p>";
            } 
        else {
            if (mysqli_num_rows( $result ) !=0){
                // Display the retrieved records
                echo "<table border=\"1\">\n";
                echo "<tr>\n "
                ."<th scope=\"col\">attempt_id</th>\n "
                ."<th scope=\"col\">date_time</th>\n "
                ."<th scope=\"col\">first_name</th>\n "
                ."<th scope=\"col\">last_name</th>\n "
                ."<th scope=\"col\">student_number</th>\n "
                ."<th scope=\"col\">number_of_attempts</th>\n "
                ."<th scope=\"col\">score (%)</th>\n "
            
                ."<tr>\n ";
            
                // retrieve current record pointed by the result pointer
            
                while ($row = mysqli_fetch_assoc ($result)) {
                    echo "<tr>\n";
                    echo "<td>", $row["attempt_id"], "</td>\n";
                    echo "<td>", $row["date_time"], "</td>\n";
                    echo "<td>", $row["first_name"], "</td>\n";
                    echo "<td>", $row["last_name"], "</td>\n";
                    echo "<td>", $row["student_number"], "</td>\n";
                    echo "<td>", $row["number_of_attempts"], "</td>\n";
                    echo "<td>", $row["score"], "</td>\n";
                    
                    echo "</tr>\n";
                    }
            
                    echo "</table>\n ";
                    // Frees up the memory, after using the result pointer
                    mysqli_free_result($result);
                    echo "<p>Would you like to delete all of these attempts?<p>";
                    echo "<form method='post' action='delete2.php' class='manage_form'>";
                    echo "<input type='hidden' name='student_number' value='$student_number'>";
                    echo "<p>Yes<input type='radio' value='yes' name='answer'></p>";
                    echo "<p>No<input type='radio' value='no' name='answer'></p>";
                    echo "<p><input type='submit'></p>";
                    echo "</form>";}
                
            else{
                echo("<p>There are no attempts under student number: $student_number</p>");
            }}}}
mysqli_close($conn);}

else {
    echo "<p>Connection failed!</p>";
    echo mysqli_connect_error();
}
?>

</body>
</html>