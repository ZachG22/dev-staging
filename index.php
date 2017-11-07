<?php
/**
 * @author	Zach Giordano
 * @created 11/6/17
 * Main index.php file for the dev-staging site
 */
?>
<?php if(false): ?>
<?php include('database/GetConnection.php'); ?>
<?php echo "<p>Testing the Database!</p>"; ?>
<?php
		// Create Connection
		$conn = new GetConnection();
		$mysqli = $conn->getConnection("testsite");
		
		$sql = "SELECT * FROM video_games WHERE id=1";
		$result = $mysqli->query($sql);
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				echo "Video Games We Like<br>". "Name: " . $row["name"] . ", "
						. "Platform: " . $row["platform"] . "<br>";
			}
		} else {
			echo "0 results";
		}
		$mysqli->close();
?>
<?php endif; ?>

<html>
	<title>Staging Site | Jeanne Giordano</title>
</html>