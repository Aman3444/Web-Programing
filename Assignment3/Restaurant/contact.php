<?php include("header.php"); 
require ("db_config.php");


$host = "localhost";
$username = "multcom_eatery";
$password = "aman@@user";
$database = "multcom_eatery";


//$error = "";
if (! isset ( $_POST ["customerfName"] ) || ! isset ( $_POST ["customerlName"] ) || ! isset ( $_POST ["phoneNumber"] ) || ! isset ( $_POST ["emailAddress"] ) || ! isset ( $_POST ["username"] ) || ! isset ( $_POST ["referral"] )) {
	echo " Please fill all the following information";
} else {
		if ($_POST ["customerfName"] != "" && $_POST ["customerlName"] != "" && $_POST ["phoneNumber"] != "" && $_POST ["emailAddress"] != "" && $_POST ["username"] != "" && $_POST ["referral"] != "") {
			$connection = mysqli_connect ( $host, $username, $password, $database );
			mysql_select_db($database, $connection);
			
			if (mysqli_connect_errno ()) {
				die ( "Failed to connect to database" . mysqli_connect_error () );
			}

			$firstName = $_POST["customerfName"];
			$lastName = $_POST["customerlName"];
			$phoneNumber = $_POST["phoneNumber"];
			$emailAddress = $_POST["emailAddress"];
			$username = $_POST["username"];
			$referral = $_POST["referral"];
			
			
			
			$result = mysqli_query($connection, "SELECT * FROM mailingList WHERE emailAddress='".$emailAddress."'");
			$emailCount = mysqli_num_rows($result);
			
			if($emailCount < 1){
				$emailHash = create_email_hash($emailAddress); //hashing email address
				$insert = "INSERT INTO mailingList (firstName, lastName,  phoneNumber, emailAddress,emailHash, username, referrer) VALUES('" . $_POST ["customerfName"] . "', '" . $_POST ["customerlName"] . "', '" . $_POST ["phoneNumber"] . "', '" . $_POST ["emailAddress"] . "', '" . $emailHash ."' ,'" . $_POST ["username"] . "', '" . $_POST ["referral"] . "');";
				if (mysqli_query ( $connection, $insert )){
					$error = "Successfully added.";
				}else{		
					echo '<h2> Error happened during insert , PLease try again !</h2>';
				}
			}else{
				echo '<h2> Email already exist , PLease Enter different email address !</h2>';
			}
		}
	}

function create_email_hash($emailAddress){
	if(function_exists('password_hash')){
		$arrOptions = [
            'cost' => 12,
		];
		
		$hash = password_hash($emailAddress, PASSWORD_DEFAULT, $arrOptions);
		return $hash;
	}else{
		$salt = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
		$salt = base64_encode($salt);
		$salt = str_replace('+', '.', $salt);
		$hash = crypt($emailAddress, '$2y$10$' . $salt . '$');
		
		return $hash;
	}
}
?>

	
	
	

            <div id="content" class="clearfix">
                <aside>
                        <h2>Mailing Address</h2>
                        <h3>1385 Woodroffe Ave<br>
                            Ottawa, ON K4C1A4</h3>
                        <h2>Phone Number</h2>
                        <h3>(613)727-4723</h3>
                        <h2>Fax Number</h2>
                        <h3>(613)555-1212</h3>
                        <h2>Email Address</h2>
                        <h3>info@wpeatery.com</h3>
                </aside>
                <div class="main">
                    <h1>Sign up for our newsletter</h1>
                    <p>Please fill out the following form to be kept up to date with news, specials, and promotions from the WP eatery!</p>
                    <form name="frmNewsletter" id="frmNewsletter" method="post">
                        <table>
                            <tr>
                                <td>First Name:</td>
                                <td><input type="text" name="customerfName" id="customerfName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Last Name:</td>
                                <td><input type="text" name="customerlName" id="customerlName" size='40'></td>
                            </tr>
                            <tr>
                                <td>Phone Number:</td>
                                <td><input type="text" name="phoneNumber" id="phoneNumber" size='40'></td>
                            </tr>
                            <tr>
                                <td>Email Address:</td>
                                <td><input type="text" name="emailAddress" id="emailAddress" size='40'>
                            </tr>
                             <tr>
                                <td>Username:</td>
                                <td><input type="text" name="username" id="username" size='20'>
                            </tr>
                            <tr>
                                <td>How did you hear<br> about us?</td>
                                <td>
                                   <select name="referral" size="1">
                                      <option>Select referer</option>
                                      <option value="newspaper">Newspaper</option>
                                      <option value="radio">Radio</option>
                                      <option value="tv">Television</option>
                                      <option value="other">Other</option>
                                   </select>
                                </td>
                            </tr>
                            <tr>
                                <td colspan='2'><input type='submit' name='btnSubmit' id='btnSubmit' value='Sign up!'>&nbsp;&nbsp;<input type='reset' name="btnReset" id="btnReset" value="Reset Form"></td>
                            </tr>
                        </table>
                    </form>
                </div><!-- End Main -->
				
				
				
				
            </div><!-- End Content -->
            
    <?php include("footer.php"); ?>
