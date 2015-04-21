<?php
session_start();
require_once('db_connect.php');
if (empty($_POST)){
	header("Location: home.php");
	exit;
}
$team_name = $_SESSION['team_name'];
$tier = intval($_POST['tier']);
$completed = intval($_POST['completed']);
$hash = $_POST['hash'];

$account = $accounts->findOne(array("team_name"=>$team_name));
$activity = $activities->findOne(array('tier'=>$tier));
$check = substr($activity[$completed], 0, 5).'eee';
$points = $activity["points"];

if (password_verify($check, $hash)){
	$record = $account['tier_'.$tier];
	if ($record[$completed] == '1'){
		echo 0;
		exit;
	}
	$record[$completed] = '1';
	$query = array("team_name"=>$team_name);
	$changes =array(
			'$set'=>array(
				'tier_'.$tier=>$record
				),  
			'$inc'=>array(
				'total_points'=>$points
				)
			);
		
	$accounts->update($query, $changes);
	$new_points = $account["total_points"];
	$_SESSION['total_points'] = $new_points;
	echo $new_points + $points; //asynchronous process 
	exit;
}
else {
	echo 0;
	exit;
}



?>