<?php
if (isset($_POST['submit'])) {

	$name=addslashes(strip_tags(trim($_POST['name'])));
	$name=addslashes(strip_tags(trim($_POST['subject'])));
	$name=addslashes(strip_tags(trim($_POST['message'])));

echo $name;
}
?>