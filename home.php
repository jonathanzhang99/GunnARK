<?php
session_start();
if (empty($_SESSION['user_login'])){
	header("Location: ./");

}
require_once('server/db_connect.php');
$points = $_SESSION["total_points"];
$team = $_SESSION["team_name"];
$tiers = array(
	$_SESSION["tier_1"],
	$_SESSION["tier_2"],
	$_SESSION["tier_3"],
	$_SESSION["tier_4"],
	$_SESSION["tier_5"]
	);


$tier_completion = array();
foreach ($tiers as $value){
	$tier_completion[] = substr_count($value, '1');
}

include "layout.php"	
?>

<?php startblock("body") ?>

<div class="container-fluid">
	<div class="points">
		<h2>Points: <?php echo $points ?></h2>
	</div>
	<div class="welcome">
		<h1>Team <?php echo $team; ?></h1>
	</div>
	<div class="tiers" id="tier_1">
	<?php 
		$tier_1 = str_split($tiers[0]);

		$query = array("tier"=>1);
		$first = $activities->findOne($query);
		foreach ($tier_1 as $key => $value){
			$content = $first[$key];
			$hashed = password_hash(substr($content, 0, 5) . 'eee', PASSWORD_DEFAULT);
			if ($value == "1"){
	?>	
		<div class="form-style">
			<h2> <?php echo $first[$key] ?></h2>
		</div>
	<?php
			}
			else if ($key < 10) {
	?>
		<div class="form-style">
			<h2> <?php echo $first[$key] ?></h2>
			<?php echo "<button class='btn btn-default activity-submit' data-tier='".'1'."'data-number='".$key."' data-value='".$hashed."'>Finished</button>"; ?>
		</div>
	<?php
			}
		}
	?>
	</div>

</div>
<?php endblock() ?>

<?php startblock("javascript") ?>
<script src="js/home.js" type="text/javascript"></script>
<?php endblock() ?>

				
