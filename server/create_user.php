<?php

ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);
session_start();
require_once("db_connect.php");

if (empty($_POST)){
	header("Location: ./");
	exit;
}

$team_name = $_POST['team-name'];
$password = $_POST['team-password'];
$team_password = password_hash($password, PASSWORD_DEFAULT);
$name_member_1 = $_POST['member-1'];
$email_member_1 = $_POST['email-member-1'];
$grade_member_1 = $_POST['grade-member-1'];
$name_member_2 = $_POST['member-2'];
$grade_member_2 = $_POST['grade-member-2'];
$email_member_2 = $_POST['email-member-2'];
//$shirt_member_2 = $_POST['shirt-member-2'];
// $shirt_member_1 = $_POST['shirt-member-1'];

$_id = new MongoID();
$id_string = (string)$_id;
echo "done";
$query = array(
	"_id" => $id_string,
	"team_name" => $team_name,
	"team_password" => $team_password,
	"name_member_1" => $name_member_1,
	"grade_member_1" => $grade_member_1,
	"email_member_1" => $email_member_1,
	"name_member_2" => $name_member_2,
	"grade_member_2" => $grade_member_2,
	"email_member_2" => $email_member_2,
	"total_points" => 0,
	"tier_1" => '000000000000000',
	"tier_2" => '000000000000000',
	"tier_3" => '000000000000000',
	"tier_4" => '000000000000000',
	"tier_5" => '000000000000000'

	);
$accounts->insert($query);


?>