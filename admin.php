<?php

// Include the header:
$page_title = 'Admin Page';
include ('includesAdmin/header.html');

// Print any error messages, if they exist:
if (isset($errors) && !empty($errors)) {
	echo '<h1>Error!</h1>
	<p class="error">The following error(s) occurred:<br />';
	foreach ($errors as $msg) {
		echo " - $msg<br />\n";
	}
	echo '</p><p>Please try again.</p>';
}
?>

<?php include ('includesAdmin/footer.html'); ?>
