<?php
session_start()
?>
<!DOCTYPE html>
<html class="nojs html css_verticalspacer" lang="en-US">
 <head>

  <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
  <meta name="generator" content="2017.0.2.363"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <script type="text/javascript">
   // Update the 'nojs'/'js' class on the html node
document.documentElement.className = document.documentElement.className.replace(/\bnojs\b/g, 'js');

// Check that all required assets are uploaded and up-to-date
if(typeof Muse == "undefined") window.Muse = {}; window.Muse.assets = {"required":["museutils.js", "museconfig.js", "jquery.musemenu.js", "jquery.musepolyfill.bgsize.js", "jquery.watch.js", "jquery.museresponsive.js", "require.js", "add-staff.css"], "outOfDate":[]};
</script>
  
  <title>Add Staff</title>
  <!-- CSS -->
  <link rel="stylesheet" type="text/css" href="css/site_global.css?crc=443350757"/>
  <link rel="stylesheet" type="text/css" href="css/master_admin.css?crc=87852724"/>
  <link rel="stylesheet" type="text/css" href="css/add-staff.css?crc=3865000349" id="pagesheet"/>
  <!-- IE-only CSS -->
  <!--[if lt IE 9]>
  <link rel="stylesheet" type="text/css" href="css/nomq_preview_master_admin.css?crc=366379701"/>
  <link rel="stylesheet" type="text/css" href="css/nomq_add-staff.css?crc=4206951525" id="nomq_pagesheet"/>
  <![endif]-->
  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="scripts/html5shiv.js?crc=4241844378" type="text/javascript"></script>
  <![endif]-->
   </head>
 <body>

  <div class="breakpoint active" id="bp_infinity" data-min-width="923"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox" id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem" id="u2368" href="admin.php"><!-- image --><img class="block temp_no_img_src" id="u2368_img" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="123" data-image-height="162" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix" id="menuu3329"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem" id="u3337"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u3338" href="admin.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u3339" alt="Home" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u3543"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u3546" href="admin-about-us.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u3548" alt="About Us" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u3572"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u3573" href="admin-competitions.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u3574" alt="Competitions" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem" id="u3600"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem" id="u3603" href="admin-faqs.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u3606" alt="FAQs" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem" id="ppu2370"><!-- column -->
     <div class="clearfix colelem" id="pu2370"><!-- group -->
      <div class="clip_frame grpelem shared_content" id="u2370" data-content-guid="u2370_content"><!-- image -->
       <img class="block temp_no_img_src" id="u2370_img" data-orig-src="images/person.png?crc=362030680" alt="" width="35" height="23" src="images/blank.gif?crc=4208392903"/>
      </div>
      <nav class="MenuBar clearfix grpelem" id="menuu2397"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem" id="u2398"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem" id="u2443"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem" id="u2445" alt="Account " src="images/blank.gif?crc=4208392903"/><!-- state-based BG images -->
         <div class="grpelem" id="u2446"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix" id="u2399"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem" id="u2400"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem" id="u2436"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2439" href="admin-edit.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u2442" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem" id="u14717"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u14718" href="view-competitors.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u14721" alt="&nbsp;View Competitors" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem" id="u2547"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2548" href="team-view-and-edit.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u2549" alt="&nbsp;Teams" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem" id="u3094"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u3095" href="meet-view-and-edit.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u3098" alt="&nbsp;Meets" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem" id="u2422"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2425" href="fees-view-and-edit.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u2427" alt="&nbsp;Fees" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem" id="u2415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u2416" href="view-staff-info.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u2419" alt="&nbsp;View Staff" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem" id="u14871"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem" id="u14872" href="add-staff.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u14875" alt="&nbsp;Add Staff Member" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem" id="u3236"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem" id="u3239" href="logout.php"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem" id="u3242" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_img_src" id="u37003-4" alt="Add Staff" data-orig-src="images/u37003-4.png?crc=4048823113" data-image-width="630" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <div class="colelem shared_content" id="u37093" data-content-guid="u37093_content"><!-- custom html -->
      <?php # add_staff.php 
$page_title = 'Add a Staff Member';
// Check for form submission:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
echo '<pre>' . print_r($_POST) . '</pre>';
	require ('mysqli_connect.php'); // Connect to the db.
		
	$errors = array(); // Initialize an error array.
	
	// Check for a first name:
	if (!isset($_POST['First_Name'])) {
		$errors[] = 'You forgot to enter the first name.';
	} else {
		$fn = mysqli_real_escape_string($dbc, trim($_POST['First_Name']));
	}
	
	// Check for a last name:
	if (!isset($_POST['Last_Name'])) {
		$errors[] = 'You forgot to enter the last name.';
	} else {
		$ln = mysqli_real_escape_string($dbc, trim($_POST['Last_Name']));
	}
	
	// default password: <first name><last name>-Pasword
	// e.g. JohnSmith-Password
	$p = $fn . $ln . '-Password';
	
	// Check for an email address:
	if (!isset($_POST['Email'])) {
		$errors[] = 'You forgot to enter their email address.';
	} else {
		$e = mysqli_real_escape_string($dbc, trim($_POST['Email']));
	}
	
	// Check for SSN:
	if (!isset($_POST['SSN'])) {
		$errors[] = 'You forgot to enter their SSN.';
	} else {
		$ssn = mysqli_real_escape_string($dbc, trim($_POST['SSN']));
	}
	
	// Check for job title:
	if (!isset($_POST['Job_Title'])) {
		$errors[] = 'You forgot to enter their job title.';
	} else {
		$job = mysqli_real_escape_string($dbc, trim($_POST['Job_Title']));
	}
	
	// Check for a wage:
	if (!isset($_POST['Wage'])) {
		$errors[] = 'You forgot to enter their wage.';
	} else {
		$wage = mysqli_real_escape_string($dbc, trim($_POST['Wage']));
	}
	
	// Check for date of birth:
	if (!isset($_POST['Date_Of_Birth'])) {
		$errors[] = 'You forgot to enter their date of birth.';
	} else {
		$dob = mysqli_real_escape_string($dbc, trim(\DateTime::createFromFormat('m-d-Y',$_POST['Date_Of_Birth'])->format('Y-m-d'))); // assume came in the form  MM-DD-YYYY
	}
	
	// Check for address:
	if (!isset($_POST['Address'])) {
		$errors[] = 'You forgot to enter their address.';
	} else {
		$addr = mysqli_real_escape_string($dbc, trim($_POST['Address']));
	}
	
	// Check for city:
	if (!isset($_POST['City'])) {
		$errors[] = 'You forgot to enter their City.';
	} else {
		$city = mysqli_real_escape_string($dbc, trim($_POST['City']));
	}
	
	// Check for state:
	if (!isset($_POST['State'])) {
		$errors[] = 'You forgot to enter their state.';
	} else {
		$state = mysqli_real_escape_string($dbc, trim($_POST['State']));
	}
	
	// Check for zip:
	if (!isset($_POST['ZIP'])) {
		$errors[] = 'You forgot to enter their ZIP.';
	} else {
		$zip_code = mysqli_real_escape_string($dbc, trim($_POST['ZIP']));
	}
	
	// Check for phone:
	if (!isset($_POST['Phone'])) {
		$errors[] = 'You forgot to enter their home phone number.';
	} else {
		$phone = mysqli_real_escape_string($dbc, trim($_POST['Phone']));
	}
	
	// Check for admin status:
	if (!isset($_POST['Admin'])) {
		$errors[] = 'You forgot to enter their admin status.';
	} else {
		$is_admin = mysqli_real_escape_string($dbc, trim($_POST['Admin']));
	}
	
	if (empty($errors)) { // If everything's OK.
	
		// Register the user in the database...
		// first, STAFF
		$q = "INSERT INTO STAFF (SSN, Job_Title, Hourly_Wage, Is_Admin) VALUES ('$ssn', '$job', '$wage', $is_admin)";
		$r = @mysqli_query($dbc, $q);
		
		if (!$r)
		{
			echo '<p>Something went terribly wrong. ERROR: 1</p>';
			mysqli_free_result ($r);
			mysqli_close($dbc); // Close the database connection.
			include ('includesAdmin/adminFooter.html'); 
			exit();
		}
		
		mysqli_free_result ($r);
		
		// get Staff_ID
		$q = "SELECT Staff_ID
		FROM STAFF
		ORDER BY Staff_ID DESC
		LIMIT 1"; // maybe not best way to get?
		$r = @mysqli_query($dbc, $q);
		
		if (mysqli_affected_rows($dbc) == 1) // should only find one result
		{
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			$staff_id = $row['Staff_ID'];
		}
		else
		{
			echo '<p>Found incorrect number of results when trying to register: ' . mysqli_affected_rows($dbc) . '. ERROR: 2</p>';
			mysqli_free_result ($r);
			mysqli_close($dbc); // Close the database connection.
			include ('includesAdmin/adminFooter.html'); 
			exit();
		}
		
		mysqli_free_result ($r);
		
		// LOGIN
		$q = "INSERT INTO LOGIN (First_Name, Last_Name, Email, Password, Date_of_Birth, Street, City, State, ZIP, Phone, Registration_Date)
			VALUES ('$fn', '$ln', '$e', SHA1('$p'), '$dob', '$addr', '$city', '$state', '$zip_code', '$phone', NOW())";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		
		if (!$r)
		{
			echo '<p>Something went terribly wrong. ERROR: 3</p>';
			mysqli_free_result ($r);
			mysqli_close($dbc); // Close the database connection.
			include ('includesAdmin/adminFooter.html'); 
			exit();
		}
		
		mysqli_free_result ($r);
		
		// get ID_Login
		$q = "SELECT ID_Login
		FROM LOGIN
		ORDER BY ID_Login DESC
		LIMIT 1"; // maybe not best way to get?
		$r = @mysqli_query($dbc, $q);
		
		if (mysqli_affected_rows($dbc) == 1) // should only find one result
		{
			$row = mysqli_fetch_array($r, MYSQLI_ASSOC);
			$user_id = $row['ID_Login'];
		}
		else
		{
			echo '<p>Found incorrect number of results when trying to register: ' . mysqli_affected_rows($dbc) . '. ERROR: 4</p>';
			mysqli_free_result ($r);
			mysqli_close($dbc); // Close the database connection.
			include ('includesAdmin/adminFooter.html'); 
			exit();
		}
		
		mysqli_free_result($r);
		
		// STAFF_ID
		$q = "INSERT INTO STAFF_ID (User, Staff)
			VALUES ('$user_id', '$staff_id')";		
		$r = @mysqli_query ($dbc, $q); // Run the query.
		
		if ($r) { // If it ran OK.
		
			// Print a message:
			echo '<p>Staff member successfully registered.</p><br />';	
		
		} else { // If it did not run OK.
			
			// Public message:
			echo '<h1>System Error</h1>
			<p class="error">You could not be registered due to a system error. We apologize for any inconvenience.</p>'; 
			
			// Debugging message:
			echo '<p>' . mysqli_error($dbc) . '<br /><br />Query: ' . $q . '</p>';
						
		} // End of if ($r) IF.
		
		mysqli_free_result ($r);
		
		mysqli_close($dbc); // Close the database connection.
		// Include the footer and quit the script:
		include ('includesAdmin/adminFooter.html'); 
		exit();
		
	} else { // Report the errors.
	
		echo '<h1>Error!</h1>
		<p class="error">The following error(s) occurred:<br />';
		foreach ($errors as $msg) { // Print each error.
			echo " - $msg<br />\n";
		}
		echo '</p><p>Please try again.</p><br />';
		
	} // End of if (empty($errors)) IF.
	
	mysqli_close($dbc); // Close the database connection.
} // End of the main Submit conditional.
?>
<h1>Register</h1>
<form action="add-staff.php" method="post">
	<div>
		<label for="First_Name">First Name</label>
	</div>
	<div>
		<input type="text" name="First_Name" size="15" maxlength="20" value="<?php if (isset($_POST['First_Name'])) echo $_POST['First_Name']; ?>" required>
	</div>
	
	<div>
		<label for="Last_Name">Last name</label>
	</div>
	<div>
		<input type="text" name="Last_Name" size="15" maxlength="40" value="<?php if (isset($_POST['Last_Name'])) echo $_POST['Last_Name']; ?>" required>
	</div>
	
	<div>
		<label for="Email">Email</label>
	</div>
	<div>
		<input type="text" name="Email" size="20" maxlength="60" value="<?php if (isset($_POST['Email'])) echo $_POST['Email']; ?>" required>
	</div>
	
	<div>
		<label for="SSN">Social Security Number</label>
	</div>
	<div>
		<input type="text" maxlength="9" name="SSN" required>
	</div>
	
	<div>
		<label for="Job_Title">Job Title</label>
	</div>
	<div>
		<input type="text" name="Job_Title" required>
	</div>
	
	<div>
		<label for="Wage">Hourly Wage</label>
	</div>
	<div>
		<input type="text" name="Wage" required>
	</div>
	
	<div>
		<label for="Date_Of_Birth">Date of Birth (MM-DD-YYYY)</label>
	</div>
	<div>
		<input type="text" name="Date_Of_Birth" required>
	</div>
	
	<div>
		<label for="Address" id="address_label">Address</label>
	</div>
	<div>
		<input type="text" maxlength="100" name="Address" id="address" required>
	</div>
	
	<div>
		<label for="City" id="city_label">City</label>
	</div>
	<div>
		<input type="text" maxlength="50" name="City" id="city" required>
	</div>
	
	<div>
		<label for="State" id="state_label">State</label>
	</div>
	<div>
		<select name="State" id="state" required>
			<option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">Dist of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>
	</div>
	
	<div>
		<label for="ZIP" id="postal_code_label">ZIP or Postal Code</label>
	</div>
	<div>
		<input type="text" maxlength="16" name="ZIP" id="postal_code" required>
	</div>
	
	<div>
		<label for="Phone" id="phone_label">Home Phone Number</label>
	</div>
	<div>
		<input type="tel" maxlength="10" name="Phone" id="phone" required>
	</div>
	
	<div>
		<label for="Admin" id="admin_label">Are they a site admin?</label>
	</div>
	<div>
		<input type="radio" name="Admin" value="1"> Yes
		<input type="radio" name="Admin" value="0"> No
	</div>
	
	<div><input type="submit" name="submit" value="Register"></div>
</form>
<?php ?>
    <div class="verticalspacer shared_content" data-offset-top="539" data-content-above-spacer="539" data-content-below-spacer="49" data-content-guid="page_3_content"></div>
    <div class="grpelem shared_content" id="u14346" data-content-guid="u14346_content"><!-- content -->
     <div class="fluid_height_spacer"></div>
    </div>
    <div class="grpelem shared_content" id="u14329" data-content-guid="u14329_content"><!-- content -->
     <div class="fluid_height_spacer"></div>
    </div>
    <img class="grpelem temp_no_img_src" id="u4055-4" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u4055-4.png?crc=4117722694" data-image-width="207" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u3339-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3548-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3574-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3606-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2445-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2442-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14721-r.png?crc=494891553" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2549-r.png?crc=4080512170" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3098-r.png?crc=180080113" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2427-r.png?crc=59385962" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2419-r.png?crc=513585109" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14875-r.png?crc=195615337" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3242-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_922" data-min-width="830" data-max-width="922"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="admin.php" data-orig-id="u2368"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="118" data-image-height="155" data-orig-id="u2368_img" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix temp_no_id" data-orig-id="menuu3329"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3337"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin.php" data-orig-id="u3338"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Home" src="images/blank.gif?crc=4208392903" data-orig-id="u3339"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3543"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin-about-us.php" data-orig-id="u3546"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="About Us" src="images/blank.gif?crc=4208392903" data-orig-id="u3548"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3572"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin-competitions.php" data-orig-id="u3573"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Competitions" src="images/blank.gif?crc=4208392903" data-orig-id="u3574"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3600"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin-faqs.php" data-orig-id="u3603"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="FAQs" src="images/blank.gif?crc=4208392903" data-orig-id="u3606"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu2370"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu2370"><!-- group -->
      <span class="clip_frame grpelem placeholder" data-placeholder-for="u2370_content"><!-- placeholder node --></span>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu2397"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u2398"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u2443"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u2445"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u2446"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u2399"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u2400"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2436"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="admin-edit.php" data-orig-id="u2439"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u2442"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14717"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-competitors.php" data-orig-id="u14718"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Competitors" src="images/blank.gif?crc=4208392903" data-orig-id="u14721"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2547"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="team-view-and-edit.php" data-orig-id="u2548"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Teams" src="images/blank.gif?crc=4208392903" data-orig-id="u2549"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3094"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="meet-view-and-edit.php" data-orig-id="u3095"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Meets" src="images/blank.gif?crc=4208392903" data-orig-id="u3098"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2422"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="fees-view-and-edit.php" data-orig-id="u2425"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u2427"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-staff-info.php" data-orig-id="u2416"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Staff" src="images/blank.gif?crc=4208392903" data-orig-id="u2419"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14871"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="add-staff.php" data-orig-id="u14872"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Add Staff Member" src="images/blank.gif?crc=4208392903" data-orig-id="u14875"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3236"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u3239"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u3242"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Add Staff" data-orig-src="images/u37003-42.png?crc=377884663" data-image-width="605" data-orig-id="u37003-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37093_content"><!-- placeholder node --></span>
    </div>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u14346_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u14329_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u4055-4.png?crc=4117722694" data-image-width="198" data-orig-id="u4055-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u3339-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3548-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3574-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3606-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2445-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2442-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14721-r.png?crc=494891553" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2549-r.png?crc=4080512170" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3098-r.png?crc=180080113" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2427-r.png?crc=59385962" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2419-r.png?crc=513585109" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14875-r.png?crc=195615337" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3242-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_829" data-min-width="759" data-max-width="829"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="admin.php" data-orig-id="u2368"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="106" data-image-height="140" data-orig-id="u2368_img" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix temp_no_id" data-orig-id="menuu3329"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3337"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin.php" data-orig-id="u3338"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Home" src="images/blank.gif?crc=4208392903" data-orig-id="u3339"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3543"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin-about-us.php" data-orig-id="u3546"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="About Us" src="images/blank.gif?crc=4208392903" data-orig-id="u3548"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3572"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin-competitions.php" data-orig-id="u3573"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Competitions" src="images/blank.gif?crc=4208392903" data-orig-id="u3574"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3600"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin-faqs.php" data-orig-id="u3603"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="FAQs" src="images/blank.gif?crc=4208392903" data-orig-id="u3606"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu2370"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu2370"><!-- group -->
      <span class="clip_frame grpelem placeholder" data-placeholder-for="u2370_content"><!-- placeholder node --></span>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu2397"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u2398"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u2443"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u2445"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u2446"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u2399"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u2400"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2436"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="admin-edit.php" data-orig-id="u2439"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u2442"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14717"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-competitors.php" data-orig-id="u14718"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Competitors" src="images/blank.gif?crc=4208392903" data-orig-id="u14721"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2547"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="team-view-and-edit.php" data-orig-id="u2548"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Teams" src="images/blank.gif?crc=4208392903" data-orig-id="u2549"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3094"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="meet-view-and-edit.php" data-orig-id="u3095"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Meets" src="images/blank.gif?crc=4208392903" data-orig-id="u3098"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2422"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="fees-view-and-edit.php" data-orig-id="u2425"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u2427"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-staff-info.php" data-orig-id="u2416"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Staff" src="images/blank.gif?crc=4208392903" data-orig-id="u2419"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14871"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="add-staff.php" data-orig-id="u14872"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Add Staff Member" src="images/blank.gif?crc=4208392903" data-orig-id="u14875"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3236"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u3239"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u3242"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Add Staff" data-orig-src="images/u37003-43.png?crc=4124593244" data-image-width="544" data-orig-id="u37003-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37093_content"><!-- placeholder node --></span>
    </div>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u14346_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u14329_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u4055-4.png?crc=4117722694" data-image-width="178" data-orig-id="u4055-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u3339-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3548-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3574-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3606-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2445-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2442-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14721-r.png?crc=494891553" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2549-r.png?crc=4080512170" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3098-r.png?crc=180080113" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2427-r.png?crc=59385962" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2419-r.png?crc=513585109" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14875-r.png?crc=195615337" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3242-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_758" data-min-width="668" data-max-width="758"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="admin.php" data-orig-id="u2368"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="78" data-image-height="102" data-orig-id="u2368_img" src="images/blank.gif?crc=4208392903"/></a>
    <nav class="MenuBar clearfix temp_no_id" data-orig-id="menuu3329"><!-- horizontal box -->
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3337"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin.php" data-orig-id="u3338"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Home" src="images/blank.gif?crc=4208392903" data-orig-id="u3339"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3543"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin-about-us.php" data-orig-id="u3546"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="About Us" src="images/blank.gif?crc=4208392903" data-orig-id="u3548"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3572"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin-competitions.php" data-orig-id="u3573"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Competitions" src="images/blank.gif?crc=4208392903" data-orig-id="u3574"/><!-- state-based BG images --></a>
     </div>
     <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u3600"><!-- vertical box -->
      <a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" href="admin-faqs.php" data-orig-id="u3603"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="FAQs" src="images/blank.gif?crc=4208392903" data-orig-id="u3606"/><!-- state-based BG images --></a>
     </div>
    </nav>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu2370"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu2370"><!-- group -->
      <span class="clip_frame grpelem placeholder" data-placeholder-for="u2370_content"><!-- placeholder node --></span>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu2397"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u2398"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u2443"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u2445"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u2446"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u2399"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u2400"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2436"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="admin-edit.php" data-orig-id="u2439"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u2442"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14717"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-competitors.php" data-orig-id="u14718"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Competitors" src="images/blank.gif?crc=4208392903" data-orig-id="u14721"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2547"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="team-view-and-edit.php" data-orig-id="u2548"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Teams" src="images/blank.gif?crc=4208392903" data-orig-id="u2549"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3094"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="meet-view-and-edit.php" data-orig-id="u3095"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Meets" src="images/blank.gif?crc=4208392903" data-orig-id="u3098"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2422"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="fees-view-and-edit.php" data-orig-id="u2425"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u2427"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-staff-info.php" data-orig-id="u2416"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Staff" src="images/blank.gif?crc=4208392903" data-orig-id="u2419"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14871"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="add-staff.php" data-orig-id="u14872"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Add Staff Member" src="images/blank.gif?crc=4208392903" data-orig-id="u14875"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3236"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u3239"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u3242"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Add Staff" data-orig-src="images/u37003-44.png?crc=3829689469" data-image-width="497" data-orig-id="u37003-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37093_content"><!-- placeholder node --></span>
    </div>
    <span class="verticalspacer placeholder" data-placeholder-for="page_3_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u14346_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u14329_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src shared_content" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u4055-4.png?crc=4117722694" data-image-width="163" data-orig-id="u4055-4" src="images/blank.gif?crc=4208392903" data-content-guid="u4055-4_content"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u3339-r.png?crc=296387417" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3548-r.png?crc=532001592" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3574-r.png?crc=4175206189" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3606-r.png?crc=64117032" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2445-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2442-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14721-r.png?crc=494891553" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2549-r.png?crc=4080512170" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3098-r.png?crc=180080113" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2427-r.png?crc=59385962" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2419-r.png?crc=513585109" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14875-r.png?crc=195615337" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3242-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_667" data-min-width="541" data-max-width="667"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="admin.php" data-orig-id="u2368"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="58" data-image-height="76" data-orig-id="u2368_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu2370"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu2370"><!-- group -->
      <span class="clip_frame grpelem placeholder" data-placeholder-for="u2370_content"><!-- placeholder node --></span>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu2397"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u2398"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u2443"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u2445"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u2446"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u2399"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u2400"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2436"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="admin-edit.php" data-orig-id="u2439"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u2442"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14717"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-competitors.php" data-orig-id="u14718"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Competitors" src="images/blank.gif?crc=4208392903" data-orig-id="u14721"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2547"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="team-view-and-edit.php" data-orig-id="u2548"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Teams" src="images/blank.gif?crc=4208392903" data-orig-id="u2549"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3094"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="meet-view-and-edit.php" data-orig-id="u3095"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Meets" src="images/blank.gif?crc=4208392903" data-orig-id="u3098"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2422"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="fees-view-and-edit.php" data-orig-id="u2425"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u2427"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-staff-info.php" data-orig-id="u2416"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Staff" src="images/blank.gif?crc=4208392903" data-orig-id="u2419"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14871"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="add-staff.php" data-orig-id="u14872"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Add Staff Member" src="images/blank.gif?crc=4208392903" data-orig-id="u14875"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3236"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u3239"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u3242"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
      <nav class="MenuBar clearfix grpelem" id="menuu22641"><!-- horizontal box -->
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u22642"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u22643" href="admin.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u22644"><!-- state-based BG images --><img alt="Home" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u22644_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u22644_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u26755"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u26758" href="admin-about-us.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26760"><!-- state-based BG images --><img alt="About Us" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u26760_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u26760_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u26601"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u26604" href="admin-competitions.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26606"><!-- state-based BG images --><img alt="Competitions" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u26606_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u26606_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem" id="u26447"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u26450" href="admin-faqs.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u26452"><!-- state-based BG images --><img alt="FAQs" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u26452_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u26452_1_content"></div></div></a>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Add Staff" data-orig-src="images/u37003-45.png?crc=3899074280" data-image-width="437" data-orig-id="u37003-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37093_content"><!-- placeholder node --></span>
    </div>
    <div class="verticalspacer shared_content" data-offset-top="539" data-content-above-spacer="539" data-content-below-spacer="49" data-content-guid="page_2_content"></div>
    <span class="grpelem placeholder" data-placeholder-for="u14346_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u14329_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u4055-4_content"><!-- placeholder node --></span>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u2445-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2442-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14721-r.png?crc=494891553" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2549-r.png?crc=4080512170" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3098-r.png?crc=180080113" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2427-r.png?crc=59385962" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2419-r.png?crc=513585109" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14875-r.png?crc=195615337" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3242-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u22644-r.png?crc=4035631634" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u26760-r.png?crc=440143496" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u26606-r.png?crc=206163101" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u26452-r.png?crc=517667874" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_540" data-min-width="522" data-max-width="540"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="admin.php" data-orig-id="u2368"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="43" data-image-height="57" data-orig-id="u2368_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu2370"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu2370"><!-- group -->
      <div class="clip_frame grpelem temp_no_id shared_content" data-orig-id="u2370" data-content-guid="u2370_content1"><!-- image -->
       <img class="block temp_no_id temp_no_img_src" data-orig-src="images/person.png?crc=362030680" alt="" width="33" height="22" data-orig-id="u2370_img" src="images/blank.gif?crc=4208392903"/>
      </div>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu2397"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u2398"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u2443"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u2445"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u2446"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u2399"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u2400"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2436"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="admin-edit.php" data-orig-id="u2439"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u2442"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14717"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-competitors.php" data-orig-id="u14718"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Competitors" src="images/blank.gif?crc=4208392903" data-orig-id="u14721"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2547"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="team-view-and-edit.php" data-orig-id="u2548"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Teams" src="images/blank.gif?crc=4208392903" data-orig-id="u2549"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3094"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="meet-view-and-edit.php" data-orig-id="u3095"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Meets" src="images/blank.gif?crc=4208392903" data-orig-id="u3098"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2422"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="fees-view-and-edit.php" data-orig-id="u2425"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u2427"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-staff-info.php" data-orig-id="u2416"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Staff" src="images/blank.gif?crc=4208392903" data-orig-id="u2419"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14871"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="add-staff.php" data-orig-id="u14872"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Add Staff Member" src="images/blank.gif?crc=4208392903" data-orig-id="u14875"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3236"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u3239"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u3242"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu22641"><!-- horizontal box -->
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u22642"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="admin.php" data-orig-id="u22643"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u22644"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u22644_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u22644_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u26755"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="admin-about-us.php" data-orig-id="u26758"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u26760"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u26760_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u26760_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u26601"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="admin-competitions.php" data-orig-id="u26604"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u26606"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u26606_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u26606_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u26447"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="admin-faqs.php" data-orig-id="u26450"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u26452"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u26452_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u26452_1_content"><!-- placeholder node --></span></div></a>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Add Staff" data-orig-src="images/u37003-46.png?crc=4071763492" data-image-width="354" data-orig-id="u37003-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37093_content"><!-- placeholder node --></span>
    </div>
    <span class="verticalspacer placeholder" data-placeholder-for="page_2_content"><!-- placeholder node --></span>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u14346_content"><!-- placeholder node --></span>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u14329_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u4055-4.png?crc=4117722694" data-image-width="160" data-orig-id="u4055-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u2445-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2442-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14721-r.png?crc=494891553" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2549-r.png?crc=4080512170" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3098-r.png?crc=180080113" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2427-r.png?crc=59385962" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2419-r.png?crc=513585109" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14875-r.png?crc=195615337" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3242-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u22644-r.png?crc=4035631634" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u26760-r.png?crc=440143496" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u26606-r.png?crc=206163101" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u26452-r.png?crc=517667874" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/facebook_red.png?crc=492186112" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/twitter_red.png?crc=285332523" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_521" data-min-width="507" data-max-width="521"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="admin.php" data-orig-id="u2368"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="42" data-image-height="55" data-orig-id="u2368_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu2370"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu2370"><!-- group -->
      <span class="clip_frame grpelem placeholder" data-placeholder-for="u2370_content1"><!-- placeholder node --></span>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu2397"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u2398"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u2443"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u2445"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u2446"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u2399"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u2400"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2436"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="admin-edit.php" data-orig-id="u2439"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u2442"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14717"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-competitors.php" data-orig-id="u14718"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Competitors" src="images/blank.gif?crc=4208392903" data-orig-id="u14721"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2547"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="team-view-and-edit.php" data-orig-id="u2548"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Teams" src="images/blank.gif?crc=4208392903" data-orig-id="u2549"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3094"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="meet-view-and-edit.php" data-orig-id="u3095"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Meets" src="images/blank.gif?crc=4208392903" data-orig-id="u3098"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2422"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="fees-view-and-edit.php" data-orig-id="u2425"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u2427"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-staff-info.php" data-orig-id="u2416"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Staff" src="images/blank.gif?crc=4208392903" data-orig-id="u2419"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14871"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="add-staff.php" data-orig-id="u14872"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Add Staff Member" src="images/blank.gif?crc=4208392903" data-orig-id="u14875"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3236"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u3239"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u3242"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu22641"><!-- horizontal box -->
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u22642"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="admin.php" data-orig-id="u22643"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u22644"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u22644_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u22644_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u26755"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="admin-about-us.php" data-orig-id="u26758"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u26760"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u26760_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u26760_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u26601"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="admin-competitions.php" data-orig-id="u26604"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u26606"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u26606_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u26606_1_content"><!-- placeholder node --></span></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u26447"><!-- vertical box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox shadow rounded-corners clearfix colelem temp_no_id" href="admin-faqs.php" data-orig-id="u26450"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u26452"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u26452_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u26452_1_content"><!-- placeholder node --></span></div></a>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Add Staff" data-orig-src="images/u37003-47.png?crc=4165129318" data-image-width="341" data-orig-id="u37003-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37093_content"><!-- placeholder node --></span>
    </div>
    <div class="verticalspacer shared_content" data-offset-top="748" data-content-above-spacer="747" data-content-below-spacer="49" data-content-guid="page_2_content1"></div>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u14346_content"><!-- placeholder node --></span>
    <span class="museBGSize grpelem placeholder" data-placeholder-for="u14329_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u4055-4.png?crc=4117722694" data-image-width="154" data-orig-id="u4055-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u2445-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2442-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14721-r.png?crc=494891553" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2549-r.png?crc=4080512170" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3098-r.png?crc=180080113" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2427-r.png?crc=59385962" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2419-r.png?crc=513585109" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14875-r.png?crc=195615337" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3242-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u22644-r.png?crc=4035631634" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u26760-r.png?crc=440143496" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u26606-r.png?crc=206163101" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u26452-r.png?crc=517667874" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/facebook_red.png?crc=492186112" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/twitter_red.png?crc=285332523" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_506" data-min-width="445" data-max-width="506"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- group -->
    <a class="nonblock nontext clip_frame grpelem temp_no_id" href="admin.php" data-orig-id="u2368"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="65" data-image-height="85" data-orig-id="u2368_img" src="images/blank.gif?crc=4208392903"/></a>
    <div class="clearfix grpelem temp_no_id" data-orig-id="ppu2370"><!-- column -->
     <div class="clearfix colelem temp_no_id" data-orig-id="pu2370"><!-- group -->
      <div class="clip_frame grpelem temp_no_id" data-orig-id="u2370"><!-- image -->
       <img class="block temp_no_id temp_no_img_src" data-orig-src="images/person.png?crc=362030680" alt="" width="27" height="18" data-orig-id="u2370_img" src="images/blank.gif?crc=4208392903"/>
      </div>
      <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu2397"><!-- horizontal box -->
       <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u2398"><!-- vertical box -->
        <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u2443"><!-- horizontal box -->
         <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u2445"/><!-- state-based BG images -->
         <div class="grpelem temp_no_id" data-orig-id="u2446"><!-- content --></div>
        </div>
        <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u2399"><!-- vertical box -->
         <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u2400"><!-- vertical box -->
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2436"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="admin-edit.php" data-orig-id="u2439"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u2442"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14717"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-competitors.php" data-orig-id="u14718"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Competitors" src="images/blank.gif?crc=4208392903" data-orig-id="u14721"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2547"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="team-view-and-edit.php" data-orig-id="u2548"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Teams" src="images/blank.gif?crc=4208392903" data-orig-id="u2549"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3094"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="meet-view-and-edit.php" data-orig-id="u3095"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Meets" src="images/blank.gif?crc=4208392903" data-orig-id="u3098"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2422"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="fees-view-and-edit.php" data-orig-id="u2425"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u2427"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-staff-info.php" data-orig-id="u2416"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Staff" src="images/blank.gif?crc=4208392903" data-orig-id="u2419"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14871"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="add-staff.php" data-orig-id="u14872"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Add Staff Member" src="images/blank.gif?crc=4208392903" data-orig-id="u14875"/><!-- state-based BG images --></a></li>
          <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3236"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u3239"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u3242"/><!-- state-based BG images --></a></li>
         </ul>
        </div>
       </div>
      </nav>
      <nav class="MenuBar clearfix grpelem" id="menuu11233"><!-- vertical box -->
       <div class="MenuItemContainer borderbox clearfix colelem" id="u11248"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u11249" href="admin.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u11250"><!-- state-based BG images --><img alt="Home" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u11250_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u11250_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix colelem" id="u11234"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u11237" href="admin-about-us.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u11238"><!-- state-based BG images --><img alt="About Us" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u11238_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u11238_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix colelem" id="u11241"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u11244" href="admin-competitions.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u11245"><!-- state-based BG images --><img alt="Competitions" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u11245_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u11245_1_content"></div></div></a>
       </div>
       <div class="MenuItemContainer borderbox clearfix colelem" id="u11255"><!-- horizontal box -->
        <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u11258" href="admin-faqs.php"><!-- horizontal box --><div class="MenuItemLabel grpelem" id="u11260"><!-- state-based BG images --><img alt="FAQs" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u11260_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u11260_1_content"></div></div></a>
       </div>
      </nav>
     </div>
     <img class="colelem temp_no_id temp_no_img_src" alt="Add Staff" data-orig-src="images/u37003-48.png?crc=4200483825" data-image-width="332" data-orig-id="u37003-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
     <span class="colelem placeholder" data-placeholder-for="u37093_content"><!-- placeholder node --></span>
    </div>
    <span class="verticalspacer placeholder" data-placeholder-for="page_2_content1"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u14346_content"><!-- placeholder node --></span>
    <span class="grpelem placeholder" data-placeholder-for="u14329_content"><!-- placeholder node --></span>
    <img class="grpelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u4055-4.png?crc=4117722694" data-image-width="181" data-orig-id="u4055-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u2445-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2442-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14721-r.png?crc=494891553" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2549-r.png?crc=4080512170" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3098-r.png?crc=180080113" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2427-r.png?crc=59385962" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2419-r.png?crc=513585109" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14875-r.png?crc=195615337" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3242-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11250-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11238-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11245-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11260-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_444" data-min-width="388" data-max-width="444"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem" id="pu2368"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem temp_no_id" href="admin.php" data-orig-id="u2368"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="66" data-image-height="87" data-orig-id="u2368_img" src="images/blank.gif?crc=4208392903"/></a>
     <span class="clip_frame grpelem placeholder" data-placeholder-for="u2370_content"><!-- placeholder node --></span>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu2397"><!-- horizontal box -->
      <div class="MenuItemContainer clearfix grpelem temp_no_id" data-orig-id="u2398"><!-- vertical box -->
       <div class="MenuItem MenuItemWithSubMenu clearfix colelem temp_no_id" data-orig-id="u2443"><!-- horizontal box -->
        <img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="Account " src="images/blank.gif?crc=4208392903" data-orig-id="u2445"/><!-- state-based BG images -->
        <div class="grpelem temp_no_id" data-orig-id="u2446"><!-- content --></div>
       </div>
       <div class="SubMenu MenuLevel1 clearfix temp_no_id" data-orig-id="u2399"><!-- vertical box -->
        <ul class="SubMenuView clearfix colelem temp_no_id" data-orig-id="u2400"><!-- vertical box -->
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2436"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="admin-edit.php" data-orig-id="u2439"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Manage Account" src="images/blank.gif?crc=4208392903" data-orig-id="u2442"/><!-- state-based BG images --></a></li>
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14717"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-competitors.php" data-orig-id="u14718"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Competitors" src="images/blank.gif?crc=4208392903" data-orig-id="u14721"/><!-- state-based BG images --></a></li>
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2547"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="team-view-and-edit.php" data-orig-id="u2548"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Teams" src="images/blank.gif?crc=4208392903" data-orig-id="u2549"/><!-- state-based BG images --></a></li>
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3094"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="meet-view-and-edit.php" data-orig-id="u3095"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Meets" src="images/blank.gif?crc=4208392903" data-orig-id="u3098"/><!-- state-based BG images --></a></li>
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2422"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="fees-view-and-edit.php" data-orig-id="u2425"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Fees" src="images/blank.gif?crc=4208392903" data-orig-id="u2427"/><!-- state-based BG images --></a></li>
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u2415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="view-staff-info.php" data-orig-id="u2416"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;View Staff" src="images/blank.gif?crc=4208392903" data-orig-id="u2419"/><!-- state-based BG images --></a></li>
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u14871"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive clearfix grpelem temp_no_id" href="add-staff.php" data-orig-id="u14872"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Add Staff Member" src="images/blank.gif?crc=4208392903" data-orig-id="u14875"/><!-- state-based BG images --></a></li>
         <li class="MenuItemContainer clearfix colelem temp_no_id" data-orig-id="u3236"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u3239"><!-- horizontal box --><img class="MenuItemLabel NoWrap grpelem temp_no_id" alt="&nbsp;Logout" src="images/blank.gif?crc=4208392903" data-orig-id="u3242"/><!-- state-based BG images --></a></li>
        </ul>
       </div>
      </div>
     </nav>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu11233"><!-- vertical box -->
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11248"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin.php" data-orig-id="u11249"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11250"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11250_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11250_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11234"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin-about-us.php" data-orig-id="u11237"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11238"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11238_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11238_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11241"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin-competitions.php" data-orig-id="u11244"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11245"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11245_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11245_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11255"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin-faqs.php" data-orig-id="u11258"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11260"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11260_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11260_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
    </div>
    <img class="colelem temp_no_id temp_no_img_src" alt="Add Staff" data-orig-src="images/u37003-49.png?crc=4146646473" data-image-width="291" data-orig-id="u37003-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
    <span class="colelem placeholder" data-placeholder-for="u37093_content"><!-- placeholder node --></span>
    <div class="verticalspacer" data-offset-top="748" data-content-above-spacer="747" data-content-below-spacer="50"></div>
    <div class="clearfix colelem" id="pu14346"><!-- group -->
     <span class="grpelem placeholder" data-placeholder-for="u14346_content"><!-- placeholder node --></span>
     <span class="grpelem placeholder" data-placeholder-for="u14329_content"><!-- placeholder node --></span>
    </div>
    <img class="colelem temp_no_id temp_no_img_src" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u4055-4.png?crc=4117722694" data-image-width="158" data-orig-id="u4055-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u2445-m.png?crc=233360317" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2442-r.png?crc=67791723" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14721-r.png?crc=494891553" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2549-r.png?crc=4080512170" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3098-r.png?crc=180080113" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2427-r.png?crc=59385962" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u2419-r.png?crc=513585109" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14875-r.png?crc=195615337" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u3242-r.png?crc=219978275" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11250-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11238-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11245-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11260-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_387" data-min-width="341" data-max-width="387"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem temp_no_id" data-orig-id="pu2368"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem temp_no_id" href="admin.php" data-orig-id="u2368"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="57" data-image-height="75" data-orig-id="u2368_img" src="images/blank.gif?crc=4208392903"/></a>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu11233"><!-- vertical box -->
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11248"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin.php" data-orig-id="u11249"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11250"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11250_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11250_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11234"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin-about-us.php" data-orig-id="u11237"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11238"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11238_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11238_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11241"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin-competitions.php" data-orig-id="u11244"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11245"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11245_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11245_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11255"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin-faqs.php" data-orig-id="u11258"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11260"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11260_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11260_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
    </div>
    <nav class="MenuBar clearfix colelem" id="menuu12174"><!-- horizontal box -->
     <div class="MenuItemContainer borderbox clearfix grpelem" id="u12175"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u12178"><!-- horizontal box -->
       <div class="MenuItemLabel NoWrap grpelem" id="u12179"><!-- state-based BG images -->
        <img alt="Account" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u12179_0_content"/>
        <div class="fluid_height_spacer shared_content" data-content-guid="u12179_1_content"></div>
       </div>
      </div>
      <div class="SubMenu MenuLevel1 borderbox clearfix" id="u12176"><!-- vertical box -->
       <ul class="SubMenuView borderbox clearfix colelem" id="u12177"><!-- vertical box -->
        <li class="MenuItemContainer borderbox clearfix colelem" id="u13415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u13417" href="admin-edit.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13421"><!-- state-based BG images --><img alt="Manage Account" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u13421_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u13421_1_content"></div></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem" id="u15959"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u15960" href="view-competitors.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u15963"><!-- state-based BG images --><img alt="View Competitors" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u15963_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u15963_1_content"></div></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem" id="u13504"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u13505" href="team-view-and-edit.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13508"><!-- state-based BG images --><img alt="Teams" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u13508_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u13508_1_content"></div></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem" id="u13680"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u13681" href="meet-view-and-edit.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13683"><!-- state-based BG images --><img alt="Meets" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u13683_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u13683_1_content"></div></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem" id="u13834"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u13837" href="fees-view-and-edit.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13840"><!-- state-based BG images --><img alt="Fees" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u13840_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u13840_1_content"></div></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem" id="u13988"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u13989" href="view-staff-info.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u13990"><!-- state-based BG images --><img alt="View Staff" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u13990_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u13990_1_content"></div></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem" id="u15805"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix grpelem" id="u15806" href="add-staff.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u15808"><!-- state-based BG images --><img alt="Add Staff Member" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u15808_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u15808_1_content"></div></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem" id="u14142"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem" id="u14143" href="logout.php"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem" id="u14146"><!-- state-based BG images --><img alt="Logout" src="images/blank.gif?crc=4208392903" class="shared_content" data-content-guid="u14146_0_content"/><div class="fluid_height_spacer shared_content" data-content-guid="u14146_1_content"></div></div></a></li>
       </ul>
      </div>
     </div>
    </nav>
    <img class="colelem temp_no_id temp_no_img_src" alt="Add Staff" data-orig-src="images/u37003-410.png?crc=4053700005" data-image-width="253" data-orig-id="u37003-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
    <span class="colelem placeholder" data-placeholder-for="u37093_content"><!-- placeholder node --></span>
    <div class="verticalspacer shared_content" data-offset-top="748" data-content-above-spacer="747" data-content-below-spacer="50" data-content-guid="page_4_content"></div>
    <div class="clearfix colelem temp_no_id" data-orig-id="pu14346"><!-- group -->
     <span class="grpelem placeholder" data-placeholder-for="u14346_content"><!-- placeholder node --></span>
     <span class="grpelem placeholder" data-placeholder-for="u14329_content"><!-- placeholder node --></span>
    </div>
    <img class="colelem temp_no_id temp_no_img_src shared_content" alt="Cougar Gymnastics, Team 13" data-orig-src="images/u4055-4.png?crc=4117722694" data-image-width="170" data-orig-id="u4055-4" src="images/blank.gif?crc=4208392903" data-content-guid="u4055-4_content1"/><!-- rasterized frame -->
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u11250-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11238-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11245-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11260-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u12179-r.png?crc=255536487" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u13421-r.png?crc=3795179667" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u15963-r.png?crc=4174588808" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u13508-r.png?crc=4170486945" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u13683-r.png?crc=423393895" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u13840-r.png?crc=3947146027" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u13990-r.png?crc=326999174" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u15808-r.png?crc=4050741382" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14146-r.png?crc=3875492364" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <div class="breakpoint" id="bp_340" data-max-width="340"><!-- responsive breakpoint node -->
   <div class="rgba-background clearfix borderbox temp_no_id" data-orig-id="page"><!-- column -->
    <div class="clearfix colelem temp_no_id" data-orig-id="pu2368"><!-- group -->
     <a class="nonblock nontext clip_frame grpelem temp_no_id" href="admin.php" data-orig-id="u2368"><!-- image --><img class="block temp_no_id temp_no_img_src" data-orig-src="images/website_logo.png?crc=3983792562" alt="" data-image-width="50" data-image-height="66" data-orig-id="u2368_img" src="images/blank.gif?crc=4208392903"/></a>
     <nav class="MenuBar clearfix grpelem temp_no_id" data-orig-id="menuu11233"><!-- vertical box -->
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11248"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin.php" data-orig-id="u11249"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11250"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11250_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11250_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11234"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin-about-us.php" data-orig-id="u11237"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11238"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11238_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11238_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11241"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin-competitions.php" data-orig-id="u11244"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11245"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11245_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11245_1_content"><!-- placeholder node --></span></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u11255"><!-- horizontal box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin-faqs.php" data-orig-id="u11258"><!-- horizontal box --><div class="MenuItemLabel grpelem temp_no_id" data-orig-id="u11260"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u11260_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u11260_1_content"><!-- placeholder node --></span></div></a>
      </div>
     </nav>
    </div>
    <nav class="MenuBar clearfix colelem temp_no_id" data-orig-id="menuu12174"><!-- horizontal box -->
     <div class="MenuItemContainer borderbox clearfix grpelem temp_no_id" data-orig-id="u12175"><!-- vertical box -->
      <div class="MenuItem MenuItemWithSubMenu borderbox clearfix colelem temp_no_id" data-orig-id="u12178"><!-- horizontal box -->
       <div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u12179"><!-- state-based BG images -->
        <span class="placeholder" data-placeholder-for="u12179_0_content"><!-- placeholder node --></span>
        <span class="fluid_height_spacer placeholder" data-placeholder-for="u12179_1_content"><!-- placeholder node --></span>
       </div>
      </div>
      <div class="SubMenu MenuLevel1 borderbox clearfix temp_no_id" data-orig-id="u12176"><!-- vertical box -->
       <ul class="SubMenuView borderbox clearfix colelem temp_no_id" data-orig-id="u12177"><!-- vertical box -->
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u13415"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="admin-edit.php" data-orig-id="u13417"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u13421"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u13421_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u13421_1_content"><!-- placeholder node --></span></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u15959"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="view-competitors.php" data-orig-id="u15960"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u15963"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u15963_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u15963_1_content"><!-- placeholder node --></span></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u13504"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="team-view-and-edit.php" data-orig-id="u13505"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u13508"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u13508_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u13508_1_content"><!-- placeholder node --></span></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u13680"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="meet-view-and-edit.php" data-orig-id="u13681"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u13683"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u13683_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u13683_1_content"><!-- placeholder node --></span></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u13834"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="fees-view-and-edit.php" data-orig-id="u13837"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u13840"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u13840_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u13840_1_content"><!-- placeholder node --></span></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u13988"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="view-staff-info.php" data-orig-id="u13989"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u13990"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u13990_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u13990_1_content"><!-- placeholder node --></span></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u15805"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu MuseMenuActive borderbox clearfix grpelem temp_no_id" href="add-staff.php" data-orig-id="u15806"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u15808"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u15808_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u15808_1_content"><!-- placeholder node --></span></div></a></li>
        <li class="MenuItemContainer borderbox clearfix colelem temp_no_id" data-orig-id="u14142"><!-- horizontal box --><a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix grpelem temp_no_id" href="logout.php" data-orig-id="u14143"><!-- horizontal box --><div class="MenuItemLabel NoWrap grpelem temp_no_id" data-orig-id="u14146"><!-- state-based BG images --><span class="placeholder" data-placeholder-for="u14146_0_content"><!-- placeholder node --></span><span class="fluid_height_spacer placeholder" data-placeholder-for="u14146_1_content"><!-- placeholder node --></span></div></a></li>
       </ul>
      </div>
     </div>
    </nav>
    <img class="colelem temp_no_id temp_no_img_src" alt="Add Staff" data-orig-src="images/u37003-411.png?crc=3963596373" data-image-width="223" data-orig-id="u37003-4" src="images/blank.gif?crc=4208392903"/><!-- rasterized frame -->
    <span class="colelem placeholder" data-placeholder-for="u37093_content"><!-- placeholder node --></span>
    <span class="verticalspacer placeholder" data-placeholder-for="page_4_content"><!-- placeholder node --></span>
    <span class="colelem placeholder" data-placeholder-for="u14346_content"><!-- placeholder node --></span>
    <span class="colelem placeholder" data-placeholder-for="u14329_content"><!-- placeholder node --></span>
    <span class="colelem placeholder" data-placeholder-for="u4055-4_content1"><!-- placeholder node --></span>
   </div>
   <div class="preload_images">
    <img class="preload temp_no_img_src" data-orig-src="images/u11250-r.png?crc=407944633" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11238-r.png?crc=284358829" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11245-r.png?crc=4005163015" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u11260-r.png?crc=4011497649" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u12179-r.png?crc=255536487" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u13421-r.png?crc=3795179667" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u15963-r.png?crc=4174588808" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u13508-r.png?crc=4170486945" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u13683-r.png?crc=423393895" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u13840-r.png?crc=3947146027" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u13990-r.png?crc=326999174" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u15808-r.png?crc=4050741382" alt="" src="images/blank.gif?crc=4208392903"/>
    <img class="preload temp_no_img_src" data-orig-src="images/u14146-r.png?crc=3875492364" alt="" src="images/blank.gif?crc=4208392903"/>
   </div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Some files on the server may be missing or incorrect. Clear browser cache and try again. If the problem persists please contact website author.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musemenu","jquery.watch","jquery.musepolyfill.bgsize","jquery.museresponsive"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity', '#bp_922', '#bp_829', '#bp_758', '#bp_667', '#bp_540', '#bp_521', '#bp_506', '#bp_444', '#bp_387', '#bp_340'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
$( '.breakpoint' ).registerBreakpoint();/* Register breakpoints */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="scripts/require.js?crc=4234670167" type="text/javascript" async data-main="scripts/museconfig.js?crc=4152223963" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>
   </body>
</html>