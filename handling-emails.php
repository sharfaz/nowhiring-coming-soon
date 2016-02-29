<?php
$user = 'root';
//$pass = 'MF0K07Ttsy';
$pass = '';
$database = 'nowhiringapp';

$dbh = new PDO('mysql:host=localhost;dbname='.$database, $user, $pass);

if ( isset($_POST['notify']) && isset($_POST['email']) ) {
	$email = trim($_POST['email']);
	var_dump($email);
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    	
    	//check email already exists
    	$sth = $dbh->prepare('SELECT COUNT(*) FROM email_notify WHERE email = :email ');
    	$sth->bindParam(':email', $email, PDO::PARAM_STR);
    	$sth->execute();
		
		$result = $sth->fetchColumn();

		if ( empty($result) ) {
			$sql = "INSERT INTO email_notify(email, registered_date) VALUES ( :email, :reg_date)";
			$stmt = $dbh->prepare($sql);
			      	                       	                 
			$stmt->bindParam(':email', $email, PDO::PARAM_STR);       
			$stmt->bindParam(':reg_date', date('Y-m-d H:i:s'));                        
			$stmt->execute(); 
			header('Location: index.php?success=registered');
		} else {
			header('Location: index.php?error=email_exists');
		}

	} else {
		header('Location: index.php?error=email');
	}
}

?>