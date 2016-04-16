<?php
var_dump($course_info);
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
	<div>
		<h3>Course:</h3>
		
		<ul>
			<li>Course Name:</li>
			<li>Description:</li>
		</ul>
		<ul>
			<li><?= $course_info['name'] ?></li>
			<li><?= $course_info['description'] ?></li>
		</ul>
 		<a href="<?php redirect('/') ?>"><button>No Thanks</button></a>
	</div>
</body>
</html>

