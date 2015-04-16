<?php include "layout.php" ?>

<?php startblock("body") ?>
	<div class="container-fluid">
		<div class="unconfirmed confirmation ">
			<h1>Congratulations, you are registered!</h1>
		</div>
		<div class="form-style">
			<h2>ARK Kindness Scavenger Hunt Signup</h2>
			<form role="form" action="/">
				<div class="form-group">
				
					<input type="text" id="team-name" placeholder="Team Name">
					<input type="password" id="team-password" placeholder="Password">
					<input type="text" id="member-1" placeholder="Team Member 1">
					<div class="info-member">
						<input type="email" id="email-member-1" placeholder="Email">
						<select id="grade-member-1" class="placeholder">
							<option value=""  disabled selected style="display:none;">Select Your Grade</options>
							<option value="Freshman">Freshman</option>
							<option value="Sophomore">Sophomore</option>
							<option value="Junior">Junior</option>
							<option value="Senior">Senior</option>
						</select>
<!--						
						<select id="shirt-member-1" class="placeholder">
							<option value=""  disabled selected style="display:none;">Select Your Shirt Size</options>
							<option value="Freshman">Small</option>
							<option value="Sophomore">Medium</option>
							<option value="Junior">Large</option>
							<option value="Senior">X-Large</option>
						</select>
-->
						
					</div>
					<input type="text" id="member-2" placeholder="Team Member 2 (optional)">
					<div class="info-member">
						<input type="email" id="email-member-2" placeholder="Email">
						<select id="grade-member-2" class="placeholder">
							<option value=""  disabled selected style="display:none;">Select Your Grade</options>
							<option value="Freshman">Freshman</option>
							<option value="Sophomore">Sophomore</option>
							<option value="Junior">Junior</option>
							<option value="Senior">Senior</option>
						</select>
<!--
						<select id="shirt-member-2" class="placeholder" >
							<option value=""  disabled selected style="display:none;">Select Your Shirt Size</options>
							<option value="Small">Small</option>
							<option value="Medium">Medium</option>
							<option value="Large">Large</option>
							<option value="X-Large">X-Large</option>
						</select>
-->
					</div>
				</div>
				<input type="submit" id="scavenger_submit" >
				
			</form>
		</div>
	</div>

<?php endblock() ?>

<?php startblock("javascript") ?>
	<script src="js/signup.js" type="text/javascript"></script>
<?php endblock() ?>
