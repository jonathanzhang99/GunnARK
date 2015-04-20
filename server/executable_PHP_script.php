<?php
require_once('db_connect.php');

$query1 = array(
	"tier"=>1,
	0=> "Facebook like the Gunn Ark Page!",
	1=> "Smile and say hi to someone you don't talk too very often",
	2=> "Thank a teacher or a friend for something specific he or she has done today",
	3=> "Give a hug to a friend",
	4=> "Throw away some trash on campus",
	5=> "Tell someone that he or she is beautiful (or swoll)",
	6=> "Lend somone a pencil or an eraser",
	7=> "Tell somone a pickup line ;)",
	8=> "Open a door for someone",
	9=> "Write a brief, encouraging note, and leave it between the pages in a book in the library",
	10=> "Share some food with someone"
	

	);
// $query2 = array(
// 	"tier" => 2,
// 	0=> "Take a selfie with someone you do not already know on campus!",
// 	1=> "Help a teacher clean up after class (Make sure you won't be tardy to the next one!",
// 	2=> "Carry a friend's backpack to class for them",
// 	3=> "Compliment someone you are walking past during passing period",
// 	4=> "Tell a friend that you appreciate them being in your life",
// 	5=> "Offer to buy someone something fromt the Brunch Line and buy that item for him or her",
// 	6=> "Give a friend a massage (Make sure they're ok with it)",
// 	7=> "Say Hi to one of your teachers outside of the classroom",
// 	8=>
// 	9=>
// 	10=>
// 	11=>
// 	12=>
// 	13=>
// 	14=>
// 	15=>
// 	);
// $query3 = array(
// 	"tier" => 3,
// 	0=> "Bike or carpool to school with someone!",
// 	1=> "Write a friend an appreciation letter",
// 	2=> "Make tea for someone in the AC",
// 	3=> "Give a hug to someone you do not yet know (Make sure you do this without creeping him or her out)",
// 	4=> "Give someone a flower",
// 	5=> "Write a poem for someone",
// 	6=> "Make someone a friendship bracelet",
// 	7=> "Sweep someone off of their feet (Make sure you don't break yourself)",
// 	8=> "Leave $1.75 in the vending machine change dispenser for someone else to find",
// 	9=> "Start a conversation with student in the Special "
// 	10=> ""
// 	11=>
// 	12=>
// 	13=>
// 	14=>
// 	15=>
// 	);

// $query4 = array(
// 	"tier" => 4,
// 	0=> "Send Flowers to the Main Office",
// 	1=> "Write a Thank You note and personally deliver it to a teacher",
// 	2=> "Give a friend a meaninful gift",
// 	3=> "Create a playlist for a friend",
// 	4=> "Write four haikus for four of your teachers and leave them inside their box",
// 	5=> "Serenade a friend"
// 	6=>
// 	7=>
// 	8=>
// 	9=>
// 	10=>
// 	11=>
// 	12=>
// 	13=>
// 	14=>
// 	15=>
// 	);

// $query5 = array(
// 	"tier" => 2,
// 	0=> "Bring a treats or a snack of some sort to class right before a test!",
// 	1=> "With a group of friends, flash mob the Senior Quad during Brunch (Uptown Funk for style points)",
// 	2=> "With a group of Orch"
// 	3=>
// 	4=>
// 	5=>
// 	6=>
// 	7=>
// 	8=>
// 	9=>
// 	10=>
// 	11=>
// 	12=>
// 	13=>
// 	14=>
// 	15=>
// 	);
// $final_query = array($query1, $query2, $query3, $query4, $query5);
// $tiers->batchInsert($final_query);
$activities->insert($query1);


?>