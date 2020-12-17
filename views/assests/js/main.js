$(document).ready(function($){

	// User registration / insert data
	$("#user_reg_form").on('submit', function(e){
		e.preventDefault(); 
		
		$.ajax({
			url : "../../../../pdologinregister/controllers/register.controllers.php",
			method: "post",
			data : $(this).serialize()+"&action=register",
			beforeSend: function()
			{
				$("#msg").text("Loading ...");
			},
			success : function(data)
			{
				$("#reg_msg").text(data);
				$("#user_reg_form")[0].reset();
				setTimeout(function(){
					window.location.href='../../../../pdologinregister/index.php';
				}, 1000);
			}
		});
	});
	// End registration


	// login form 
	$("#login_form").on('submit', function(e){
		e.preventDefault();

		let emailorphone = $("#emailorphone").val();
		let password = $("#password").val();
		$("#emailorphone").css("border", '1px solid');
		$("#password").css("border", '1px solid');

		if(emailorphone == '')
		{
			$("#emailorphone").css("border", '2px solid red');
		}
		else if(password == '')
		{
			$("#password").css("border", '2px solid red');
		}
		else {
			$.ajax({
				url : "../../../../pdologinregister/controllers/login.controllers.php",
				method: "post",
				data : $(this).serialize()+"&action=login",
				beforeSend : function(){
					$("#login_msg").text("Loading ...");
				},
				success : function(data)
				{
					$("#user_name").text(data);
					$("#login_form")[0].reset();
					window.location.href="http://localhost/pdologinregister/home.php";
				}
			});
		}

	});
	// end login form


	//logout
	$("#logout").on('click', function(){
		logout = "logout";
		$.ajax({			
			url : "../../../../pdologinregister/controllers/logout.controllers.php",
			method: "post",
			data : {logout:logout},
			beforeSend : function()
			{
				$(".logout_text").append("Logging out ...");
			},
			success : function(data)
			{
				window.location.href = data;
			}

		});
	});
	//end logout

	


});