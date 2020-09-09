<?php
require "dbConnect.php";
?>
<?php
$sql    = "SELECT * FROM company_users";
$result = $conn->query($sql);
echo '<table ><tr><th>fname</th><th>lname</th><th>email</th><th>HomeAddress</th><th>Hphone</th><th>Cphone</th></tr>';
while ($row = $result->fetch_assoc()) {
    echo '<tr><td>';
    echo $row["fname"];
    echo '</td><td>';
    echo $row["lname"];
	echo '</td><td>';
    echo $row["email"];
	echo '</td><td>';
    echo $row["HomeAddress"];
	echo '</td><td>';
    echo $row["Hphone"];
	echo '</td><td>';
    echo $row["Cphone"];
    echo '</td></tr>';
}
echo '</table>';
?>
