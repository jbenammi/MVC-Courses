<?php 

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="author" content="Jonathan Ben-Ammi">
 	<title>File to Remove</title>
 	<meta name="description" content="This is the file we want to remove from our DB">
 	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">
 </head>
 <body>
 	<div id="container">
 		<h2>Delete Course Information?</h2>
 		<div class="input">
 			<p class="label">Course Name:</p>
 			<p class="descriptions"><?= $course_info['name'] ?></p>
 		</div>
 		<div class="input">
 			<p class="label">Course Description:</p>
 			<p class="descriptions"><?= $course_info['description'] ?></p>
 		</div>
 	</div>
 	<div id="buttons">
 	<a href="/courses"><button>No Thanks</button></a>
 	<a href="/delete/<?= $course_info['id'] ?>"><button>Yes Please Delete</button></a>
 	</div>
 </body>
 </html>