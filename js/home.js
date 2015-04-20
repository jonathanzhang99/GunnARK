$(function() {
	$("button").each(function(){
		$(this).click(function(){
			activity_data = {};
			activity_data["tier"] = $(this).attr("data-tier");
			activity_data["completed"] = $(this).attr("data-number");
			activity_data["hash"] = $(this).attr("data-value");
			$.ajax({
				type: "POST",
				dataType: "text",
				data: activity_data,
				url: "server/activity_process.php",
				success: function(resp){
					if (resp !== 0){
						location.reload();
					}
				}

			});
		});
	});
});

