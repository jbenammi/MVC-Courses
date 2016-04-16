<?php
// var_dump($course_info);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
 	<meta name="author" content="Jonathan Ben-Ammi">
 	<title>New Courses</title>
 	<meta name="description" content="This is an MVC assignment for Coding Dojo">
 	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
	<div id="addcourse">
		<h3>Add a new course</h3>
		 	<ul class="labels">
		 		<li>Name:</li>
		 		<li>Description:</li>
		 	</ul>
		 	<ul>
		<form action="/Courses/add_course" method="post">
		 		<li><input type="text" name="name" placeholder="Course Name"></li>
		 		<li><textarea name="description" placeholder="Course Description"></textarea></li>
		    <input class="button" type="submit" value="Add New Course">
		 	</ul>
		</form>
	</div>
	<div id="tableinfo">
		<h3>Courses:</h3>
		<table>
			<thead>
				<th>Course Name</th>
				<th>Description</th>
				<th>Date Added</th>
				<th>Actions</th>
			</thead>
			<tbody>
				<?php 
				for ($i = 0; $i < count($course_info); $i++) { ?>
					<tr>
				<?php foreach ($course_info[$i] as $key => $value) {
					if($key !== 'id') { ?>
					<td><?= $value ?></td>
					<?php } 
					} ?>
					<td><a href="/remove/<?= $course_info[$i]['id'] ?>" >remove</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>

