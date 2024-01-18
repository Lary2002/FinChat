$(document).ready(function () {
	$('#regForm').submit(function(){
		var firstname = $('#firstname').val();
		var lastname = $('#lastname').val();
		var email = $('#email').val();
		var password = $('#password').val();

		var result = true
		
		if (firstname == "") {
			$(firstname).parent().addClass('is-focused error')
			result = true
		}

		if (lastname == "") {
			$(firstname).parent().addClass('is-focused error')
			result = false
		}

		if (email == "") {
			$(firstname).parent().addClass('is-focused error')
			result = false
		}

		if (password == "") {
			$(firstname).parent().addClass('is-focused error')
			result = false
		}

		return result;

		// console.log(firstname + lastname + email + password);
	})
})