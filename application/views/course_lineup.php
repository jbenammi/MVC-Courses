<?php
var_dump($course_info);
?>
<!DOCTYPE html>
<html>
<head>
 <title></title>
</head>
<body>
	<div id="addcourse">
		<h3>Add a new course:</h3>
		 	<ul>
		 		<li>Name:</li>
		 		<li>Description:</li>
		 	</ul>
		 	<ul><li></li><li></li></ul>
			<form action="/add_course" method="post">
		 		<input type="text" name="name" placeholder="Course Name">
		 		<textarea name="description" placeholder="Course Description"></textarea>
		    <input type="submit" value="Add New Course">
		 	</form>
	</div>
	<div>
		<h3>Courses:</h3>
		<table>
			<thead>
				<td>Course Name</td>
				<td>Description</td>
				<td>Date Added</td>
				<td>Actions</td>
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
					<td><a href="/courses/destroy">remove</a></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</body>
</html>

