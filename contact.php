<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>page creating sussesful</h1>
</body>
</html>

<?php
  
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

    // Create connection
  $conn = new mysqli('localhost','illuministcreations','illuministcreations@2023','httpmotivational_illuministcreations');
    // Check connection
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
	    // prepare and bind
		$stmt = $conn->prepare("insert into illuministcreations_table(name, email, subject, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss",$name ,$email ,$subject ,$message);
		$execval = $stmt->execute();
		echo $execval;
	    echo "<center>";
		echo "Your Data Is Saved Sucessfully ...";
		echo "</center>";
		$stmt->close();
		$conn->close();
	}
  
?>

