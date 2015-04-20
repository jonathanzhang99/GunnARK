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
	<?php 
		$tier_1 = str_split($tiers[0]);
		$query = array("tier"=>1);
		$first = $activites->findOne($query);
		foreach ($tier_1 as $key => $value){
			if ($value == "1" && $key < 10){
			$content = $first[$key];
			$hashed = password_hash(substr($content, 0, 5) . 'eee'); 
	?>
		<div>
			<h2> <?php echo $first[$key] ?></h2>
			<a class="btn btn-default activity-submit" data-value="<?php echo htmlspecialchars($hashed) ?>">Finished!</a>
		</div>
	<?php
			}
		}
	?>
	</div>

</div>
<?php endblock() ?>

<?php startblock("javascript") ?>

<?php endblock() ?>
				