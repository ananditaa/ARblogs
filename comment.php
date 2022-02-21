<?php 

include 'https://ananditaa.github.io/ARblogs/comment_dbconfig.php';

error_reporting(0); // For not showing any error

if (isset($_POST['submit'])) { // Check press or not Post Comment Button
	$c_name = $_POST['c_name']; // Get Name from form
	$c_comment = $_POST['c_comment']; // Get Comment from form

	$sql = "INSERT INTO comment_table (c_name,c_comment)
			VALUES ('$c_name', '$c_comment')";
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo "<script>alert('Comment added successfully.')</script>";
	} else {
		echo "<script>alert('Comment is not added.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=800">

	<link rel="stylesheet" type="text/css" href="https://ananditaa.github.io/ARblogs/commentstyle.css">

	<title>Comment</title>
</head>
<body>
	<div class="wrapper">
		<form action="" method="POST" class="form">
			<div class="row">
				<div class="input-group">
					<label for="name">Name</label>
					<input type="text" name="c_name" id="c_name" placeholder="Enter your Name" required>
				</div>
			</div>
			<div class="input-group textarea">
				<label for="comment">Comment</label>
				<textarea id="c_comment" name="c_comment" placeholder="Enter your Comment" required></textarea>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Post Comment</button>
			</div>
		</form>
		<div class="prev-comments">
			<?php 
			
			$sql = "SELECT * FROM comment_table";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {

			?>
			<div class="single-item">
				<h4><?php echo $row['c_name']; ?></h4>
				<p><?php echo $row['c_comment']; ?></p>
			</div>
			<?php

				}
			}
			
			?>
		</div>
	</div>
</body>
</html>
