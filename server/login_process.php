<?php 
session_start();
require_once("db_connect.php");
if (empty($_POST)) {
	header("Location: ../");
	exit;
}

if (isset($_POST["email"]) && isset($_POST["password"])){
	$email = $_POST["email"];
	$password = $_POST["password"];
	$query = array('$or' => array(
		array("email_member_1" => $email), 
		array("email_member_2"=>$email)
		)
	);
	$account = $accounts->findOne($query);
	if ($account) {
		if (password_verify($password, $account['team_password'])) {
			$_SESSION['user_login'] = $email;
			$_SESSION['team_name'] = $account["team_name"];
			$_SESSION['name_member_1'] = $account["name_member_1"];
			$_SESSION['name_member_2'] = $account["name_member_2"];
			$_SESSION['grade_member_1'] = $account["grade_member_1"];
			$_SESSION['grade_member_2'] = $account["grade_member_2"];
			$_SESSION['total_points'] = $account["total_points"];
			$_SESSION['tier_1'] = $account["tier_1"];
			$_SESSION['tier_2'] = $account["tier_2"];
			$_SESSION['tier_3'] = $account["tier_3"];
			$_SESSION['tier_4'] = $account["tier_4"];
			$_SESSION['tier_5'] = $account["tier_5"];
			echo 1;
			exit; 



		
	} else {
		echo 0;
		exit;
	}

}else {
	echo 0;
	exit;
}
} else {
	echo 0;
	exit;
}

?>

