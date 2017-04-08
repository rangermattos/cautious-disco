<?php # edit_meet.php
// This page is for editing a meet record.
// This page is accessed through admin_meet.php.

$page_title = 'Edit a Meet';
include ('includes/header.html');
echo '<h1>Edit a Meet</h1>';

// Check for a valid meet ID, through GET or POST:
if ( (isset($_GET['ID'])) && (is_numeric($_GET['ID'])) ) {
	$id = $_GET['ID'];
} elseif ( (isset($_POST['ID'])) && (is_numeric($_POST['ID'])) ) { // Form submission.
	$id = $_POST['ID'];
} else { // No valid ID, kill the script.
	echo '<p class="error">This page has been accessed in error.</p>';
	include ('includes/footer.html');
	exit();
}

require ('./mysqli_connect.php');

// Check if the form has been submitted:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$errors = array();

	// Check for a location name:
	if (empty($_POST['Location_Name'])) {
		$errors[] = 'You forgot to enter the location name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['Location_Name']));
	}

	// Check for a street:
	if (empty($_POST['Street'])) {
		$errors[] = 'You forgot to enter your street.';
	} else {
		$street = mysqli_real_escape_string($dbc, trim($_POST['Street']));
	}

	// Check for a city:
	if (empty($_POST['City'])) {
		$errors[] = 'You forgot to enter City.';
	} else {
		$city = mysqli_real_escape_string($dbc, trim($_POST['City']));
	}

	// Check for a State:
	if (empty($_POST['State'])) {
		$errors[] = 'You forgot to enter state.';
	} else {
		$state = mysqli_real_escape_string($dbc, trim($_POST['State']));
	}

	// Check for a ZIP:
	if (empty($_POST['ZIP'])) {
		$errors[] = 'You forgot to enter ZIP.';
	} else {
		$zip = mysqli_real_escape_string($dbc, trim($_POST['ZIP']));
	}

	// Check for a Date:
	if (empty($_POST['Date'])) {
		$errors[] = 'You forgot to enter date.';
	} else {
		$date = mysqli_real_escape_string($dbc, trim($_POST['Date']));
	}

	// Check for a Time:
	if (empty($_POST['Time'])) {
		$errors[] = 'You forgot to enter time.';
	} else {
		$time = mysqli_real_escape_string($dbc, trim($_POST['Time']));
	}

	// Check for a competition name:
	if (empty($_POST['Competition_Name'])) {
		$errors[] = 'You forgot to enter competition name.';
	} else {
		$name = mysqli_real_escape_string($dbc, trim($_POST['Competition_Name']));
	}

	if (empty($errors)) { // If everything's OK.

		//  Test for unique id:
		$q = "SELECT ID FROM MEET WHERE Competition_Name='$name' AND ID != $id";
		$r = @mysqli_query($dbc, $q);
		if (mysqli_num_rows($r) == 0) {

			// Make the query:
			$q = "UPDATE MEET SET Location_Name='$ln', Street='$street', City='$city' WHERE ID=$id LIMIT 1";
			$r = @mysqli_query ($dbc, $q);
			if (mysqli_affected_rows($dbc) == 1) { // If it ran OK.

				// Print a message:
				echo '<p>The meet has been edited.</p>';

			} else { // If it did not run OK.
				echo '<p class="error">The meet could not be edited due to a system error. We apologize for any inconvenience.</p>'; // Public message.
				echo '<p>' . mysqli_error($dbc) . '<br />Query: ' . $q . '</p>'; // Debugging message.
			}

		} else { // Already registered.
			echo '<p class="error">The competition name has already been registered.</p>';
		}

	} else { // Report the errors.

		echo '<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p>';

	} // End of if (empty($errors)) IF.

} // End of submit conditional.

// Always show the form...

// Retrieve the meet's information:
$q = "SELECT Location_Name, Street, City, State, ZIP, Date, Time, Competition_Name FROM MEET WHERE ID=$id";
$r = @mysqli_query ($dbc, $q);

if (mysqli_num_rows($r) == 1) { // Valid meet ID, show the form.

	// Get the meet's information:
	$row = mysqli_fetch_array ($r, MYSQLI_NUM);

	// Create the form:
	echo '<form action="edit_meet.php" method="post">
<p>Location Name: <input type="text" name="Location_Name" size="15" maxlength="15" value="' . $row[0] . '" /></p>
<p>Street: <input type="text" name="Street" size="15" maxlength="30" value="' . $row[1] . '" /></p>
<p>City: <input type="text" name="City" size="20" maxlength="60" value="' . $row[2] . '"  /> </p>
<p>State: <input type="text" name="State" size="15" maxlength="60" value="' . $row[3] . '"  /> </p>
<p>ZIP: <input type="text" name="ZIP" size="20" maxlength="60" value="' . $row[4] . '"  /> </p>
<p>Date: <input type="text" name="Date" size="20" maxlength="60" value="' . $row[5] . '"  /> </p>
<p>Time: <input type="text" name="Time" size="20" maxlength="60" value="' . $row[6] . '"  /> </p>
<p>Competition Name: <input type="text" name="Competition_Name" size="20" maxlength="60" value="' . $row[7] . '"  /> </p>
<p><input type="submit" name="submit" value="Submit" /></p>
<input type="hidden" name="ID" value="' . $id . '" />
</form>';

} else { // Not a valid meet ID.
	echo '<p class="error">Error outputting table.</p>';
}

mysqli_close($dbc);

include ('includes/footer.html');
?>
