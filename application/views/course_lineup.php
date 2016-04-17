<?php
// var_dump($errors);
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
		<form action="/Courses/add_course" method="post">
	 	<div class="input"><?php 
	 		if (isset($errors['errors']['coursename'])){?>
	 			<p class="warning"><?= $errors['errors']['coursename']; ?></p>
	 		<?php }; 
	 		if (isset($errors['errors']['namelength'])){?>
	 			<p class="warning"><?= $errors['errors']['namelength']; ?></p>
	 		<?php }; ?>	 		
	 		<p class="labels">Name:</p>
		 	<input type="text" name="name" placeholder="Course Name">
	 	</div>
	 	<div class="input"><?php 
	 		if (isset($errors['errors']['coursedescription'])){ ?>
	 			<p class="warning"><?= $errors['errors']['coursedescription']; ?></p>
	 		<?php }; ?>
	 		<p class="labels">Description:</p>
			<textarea name="description" placeholder="Course Description"></textarea>
		</div>
	    <input class="button" type="submit" value="Add New Course">
		</form>
	</div>
	<div id="tableinfo">
		<h3>Courses</h3>
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
					if($key !== 'id') { 
						if ($key == 'created_on') { ?>
							<td><?= date("F jS, Y h:i:s A", strtotime($value)); ?></td>
						<?php
						}
						else {	?>
						<td><?= $value ?></td>
						<?php } ?>
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

