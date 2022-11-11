<?php
// define variables and set to empty values
$fname = $lname = $email  = $country = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $fname = test_input($_POST["fname"]);
  $lname = test_input($_POST["lname"]);
  $email = test_input($_POST["email"]);
  $country = test_input($__POST["country"]);
 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<?php
print "<h2>Your Input:</h2>";
print $fname;
print "<br>";
print $lname;
print "<br>";
print $email;
print "<br>";
print $country;
print "<br>";
?>