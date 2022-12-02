jQuery(document).ready(function($) {


    showDropDate();
	bindingPostcode();
	bindingPhone();
	validateForm();
	register();
	// 
	

	



	function bindingPostcode() {
		const postcodeGroups = $('.hasu-section .form-input.post-code ');

		postcodeGroups.each(function(){
			const postcodeFieldElement = $(this).children('input[name="billing_postcode"]');
			const postcodeFirstElement = $(this).children('input[name="billing_postcode_first"]');
			const postcodeSecondElement = $(this).children('input[name="billing_postcode_second"]');
			
			let postcodeVal = postcodeFieldElement.val() ;


			postcodeFirstElement.val(postcodeVal.substring(0, 3));
			postcodeSecondElement.val(postcodeVal.substring(3))

			postcodeFirstElement.keyup(function() {
				postCodeVal = $(this).val() + postcodeSecondElement.val();

			});

			postcodeSecondElement.keyup(function() {
				postCodeVal = postcodeFirstElement.val() + $(this).val();
			});

		});

	}
	
	function bindingPhone() {
		const phoneGroups = $('.hasu-section .form-input.phone');

		phoneGroups.each(function(){
			const phoneFieldElement = $(this).children('input[name="billing_phone"]');
			const phoneFirstElement = $(this).children('input[name="billing_phone_first"]');
			const phoneSecondElement = $(this).children('input[name="billing_phone_second"]');
			const phoneThirdElement = $(this).children('input[name="billing_phone_third"]');

			let phoneVal = phoneFieldElement.val() ;
			console.log(phoneFieldElement);
			if(phoneVal.length <= 10) {
				phoneFirstElement.val(phoneVal.slice(0,2));
				phoneSecondElement.val(phoneVal.slice(0,7).slice(3));
				phoneThirdElement.val(phoneVal.slice(-4));
			}else{
				phoneFirstElement.val(phoneVal.slice(0,3));
				phoneSecondElement.val(phoneVal.slice(0,7).slice(3));
				phoneThirdElement.val(phoneVal.slice(-4));
			}
			

			phoneFirstElement.keyup(function() {
				phoneVal = $(this).val() + phoneSecondElement.val() +phoneThirdElement.val() ;
				console.log(phoneVal);
			});

			phoneSecondElement.keyup(function() {
				phoneVal = phoneFirstElement.val() + $(this).val() +phoneThirdElement.val() ;
				console.log(phoneVal);

			});

			phoneThirdElement.keyup(function() {
				phoneVal = phoneFirstElement.val() + phoneSecondElement.val() + $(this).val();
				console.log(phoneVal);

			})

		});

	}

	function showDropDate() {
		const birthDateElement = $('#birth_date');
		let birthDateValue = birthDateElement.val() ? birthDateElement.val() :null;
	
		const deliveryDateElement = $('#delivery_date');
		let deliveryDateValue = deliveryDateElement.val() ? deliveryDateElement.val() :null;
	
		birthDateElement.dropdate({
			minYear: 1900,
			maxYear: new Date().getFullYear(),  
			format: 'yyyy/mm/dd',
			className: 'dropdate-select',
			defaultDate: birthDateValue
		});
		deliveryDateElement.dropdate({
			minYear: new Date().getFullYear(),
			maxYear: new Date().getFullYear() + 1,  
			format: 'yyyy/mm/dd',
			className: 'dropdate-select',
			defaultDate: deliveryDateValue
		});
	}

	function validateForm(){
		
		// backendVariables
		
		$.validator.addMethod("letters", function(value, element) {
			  return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
		});

		$.validator.addMethod("japanese_phone", function(value, element) {
			return this.optional(element) || value == value.match(/^(?:\d{10}|\d{3}-\d{3}-\d{4}|\d{2}-\d{4}-\d{4}|\d{3}-\d{4}-\d{4})$/gm);
	  	});

		$.validator.addMethod("inDigitsArray", function(value, element, params) {
			value = parseInt(value);
			return  this.optional(element) || params.includes(value);
	  	});

		$.validator.addMethod("inArray", function(value, element, params) {
			console.log(params);
			return  this.optional(element) || params.includes(value);
	  	});

		  $.validator.addMethod("password", function(value, element) {
			return this.optional(element) || value == value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z]{8,}$/);
	  });
	
		const $form = $('.hasu-section #user-register-form');

		$form.validate({
				
			rules: {
				billing_name: {
					required: true,
					maxlength: 50,
					letters: true
				},

				billing_furigana: {
					required: true,
					maxlength: 50,
				},

				billing_postcode_first: {
					required: true,
					minlength: 3,
					maxlength: 3,
					digits: true
				},

				billing_postcode_second: {
					required: true,
					minlength: 4,
					maxlength: 4,
					digits: true
				},

				billing_postcode: {
					required: true,
					minlength: 7,
					maxlength: 7,
					digits: true
				},

				billing_district: {
					required: true,
					inDigitsArray: backendVariables.japanPrefectures,
					digits: true
				},

				billing_address_1: {
					required: true,
					maxlength: 255,
				},
				
				billing_address_2: {
					required: true,
					maxlength: 255,
					letters: true
				},
				billing_phone_first: {
					required: true,
					minlength: 2,
					maxlength: 3,
				},
				billing_phone_second: {
					required: true,
					minlength: 4,
					maxlength: 4,
					digits:true
				},
				billing_phone_third: {
					required: true,
					minlength: 4,
					maxlength: 4,
					digits:true
				},
				
				billing_phone: {
					required: true,
					minlength: 10,
					maxlength: 11,
					digits:true
				},
				
				user_email: {
					required: true,
					email: true
				},

				user_password: {
					required: true,
					minlength: 8,
					maxlength: 255,
					password: true
				},

				user_password_confirmed: {
					required: true,
					equalTo: "#user_password"
				},

				gender: {
					required: true,
					inArray: backendVariables.genderTypes,
				},

				birth_date: {
					required: true,
					date: true				
				},
				
			},
			messages: {
				billing_name: "Please specify your name (only letters and spaces are allowed)",
				billing_furigana: "Please specify your name (only letters and spaces are allowed)",
				billing_postcode: "Please specify your name (only letters and spaces are allowed)",
				billing_district: "Please specify your name (only letters and spaces are allowed)",
				billing_address_1: "Please specify your name (only letters and spaces are allowed)",
				billing_address_2: "Please specify your name (only letters and spaces are allowed)",
				billing_phone: "Please specify your name (only letters and spaces are allowed)",
				user_email: "Please specify your name (only letters and spaces are allowed)",
				user_password: "Please specify your name (only letters and spaces are allowed)",
				user_password_confirmed: "Please specify your name (only letters and spaces are allowed)",
				gender: "Please specify your name (only letters and spaces are allowed)",
				birth_date: "Please specify your name (only letters and spaces are allowed)",
			},
			errorClass : "validate-error text-danger",
			errorElement: 'div',

			errorPlacement: function(error, element) {
				var placement = $(element).data('error');
				if (placement) {
				  $(placement).append(error)
				} else {
					$(element).parent().append(error);
				}
			  }

	
		//   submitHandler: function() {
		//     $successMsg.show();
		//   }
		});

	}

	function register() {
		const $form = $('.hasu-section #user-register-form');
		
		

		$('#register-button').click(function(){
			let registerData = {
				billing_name: $form.find('input[name=billing_name]').val(),
				billing_furigana: $form.find('input[name=billing_furigana]').val(),
				billing_postcode: $form.find('input[name=billing_postcode]').val(),
				billing_district: $form.find('input[name=billing_district]').val(),
				billing_address_1: $form.find('input[name=billing_address_1]').val(),
				billing_address_2: $form.find('input[name=billing_address_2]').val(),
				billing_email: $form.find('input[name=billing_email]').val(),
				user_name: $form.find('input[name=user_name]').val(),
				user_password: $form.find('input[name=user_password]').val(),
				gender: $form.find('input[name=gender]').val(), 
				birth_date: $form.find('input[name=birth_date]').val(),
			};

			console.log(registerData);

			$.ajax({
				type : "post", 
				dataType : "json", 
				url : backendVariables.adminUrl, 
				data : {
					action: "hasu_register", 
					registerData: registerData
				},
				context: this,
				beforeSend: function(){
					
				},
				success: function(response) {
					
					if(response.success) {
						console.log(response.data);
					}
					else {
						alert('Đã có lỗi xảy ra');
					}
				},
				error: function( jqXHR, textStatus, errorThrown ){
					
					console.log( 'The following error occured: ' + textStatus, errorThrown );
				}
			})
			return false;
		})
	}
});



