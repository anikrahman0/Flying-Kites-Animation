<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bangla";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "INSERT INTO info1 (name)
VALUES (N'দাদ')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


$query = mysqli_query($conn,"SELECT * FROM info1");
$num_rows = mysqli_num_rows($query);

while($a = mysqli_fetch_array($query))
	{
		
	     $id = $a['name'];
		 
		
		echo '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.$id.'<br>';
	
		
	}


mysqli_close($conn);
?>