$(document).ready(function () {
	$('#regForm').submit(function(){
		var firstname = $('#name').val();
		var lastname = $('#company').val();
		var email = $('#email').val();
		var password = $('#password').val();

		var result = true

		// if (firstname == "") {
		// 	$(firstname).parent().addClass('is-focused ')
		// 	result = true
		// }

		// if (lastname == "") {
		// 	$(firstname).parent().addClass('is-focused ')
		// 	result = false
		// }

		// if (email == "") {
		// 	$(firstname).parent().addClass('is-focused ')
		// 	result = false
		// }

		// if (password == "") {
		// 	$(firstname).parent().addClass('is-focused ')
		// 	result = false
		// }

		return result;

		// console.log(firstname + lastname + email + password);
	})
})