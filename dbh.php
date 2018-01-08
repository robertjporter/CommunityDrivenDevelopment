<?php
	$conn = mysqli_connect("localhost", "root", "", "users");
	if (!$conn){
		die("QuestManagerLogin Connection failed: ".msqli_connect_error());
	}
	