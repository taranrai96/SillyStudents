<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<style>
			body{background: #48aec7;} 
			pre {color:#9349dd;font-weight: bold;font-size: large;}
		</style>
		<title></title>
	</head>
	<body>
		<?php
			include('Student.php'); //Include directive so we can use the functions from Student class defined in Student.php

			$students = array();

			$first = new Student(); //Student 1 -> John Doe
			$first->surname = "Doe";
			$first->first_name = "John";
			$first->add_email('home','john@doe.com');
			$first->add_email('work','jdoe@mcdonalds.com');
			$first->add_grade(65);
			$first->add_grade(75);
			$first->add_grade(55);
			$students['j123'] = $first;

			$second = new Student(); //Student 2 -> Albert Einstein
			$second->surname = "Einstein";
			$second->first_name = "Albert";
			$second->add_email('home','albert@braniacs.com');
			$second->add_email('work1','a_einstein@bcit.ca');
			$second->add_email('work2','albert@physics.mit.edu');
			$second->add_grade(95);
			$second->add_grade(80);
			$second->add_grade(50);
			$students['a456'] = $second;

			$third = new Student(); //Student 3 -> Tarandeep Rai
			$third->surname = "Rai";
			$third->first_name = "Tarandeep";
			$third->add_email('home','trai5@my.bcit.ca');
			$third->add_grade(95);
			$third->add_grade(80);
			$third->add_grade(50);
			$students['a789'] = $third;

			ksort($students); //sorting the student records

			foreach($students as $student)
    			echo $student->toString(); //printing all the students that are recorded in $students array
		?>
	</body>
</html>