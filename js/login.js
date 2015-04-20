$(function() {
	$("#login_submit").click(function() {
		send_login_data();
	});
	$("#login_form").keyup(function(event) {
		if (event.which == 13) {
			send_login_data();
		}
	})
})

function send_login_data(){
	login_data = {};
	login_data["email"] = $("#login_email").val();
	login_data["password"] = $("#login_password").val();

	$.ajax({
		type: "POST",
		data: login_data,
		url: "server/login_process.php",
		dataType: "text"

	});
}