<?php
session_start();
if (empty($_SESSION['user_login'])){
	header("Location: ./");

}
$points = $_SESSION["total_points"];
$tiers = array(
	$_SESSION["tier_1"],
	$_SESSION["tier_2"],
	$_SESSION["tier_3"],
	$_SESSION["tier_4"],
	$_SESSION["tier_5"]
	);


$tier_completion = array();
foreach ($tiers as $value){
	$tier_completion[] = substr_count($tiers, '1');
}

require_once('db_connect.php');
include "layout.php"	
?>

<?php startblock("body") ?>

<div class="container-fluid">
	<div class="tiers" id="tier_1">

	</div>

</div>
<?php endblock() ?>

				