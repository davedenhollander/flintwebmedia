(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
	
function getParentName(elem) {
	var name = '';
	name += $(elem).data('name');
	if($(elem).parents('.parent').length) {
		name = name + getParentName(elem.parent());
	}
	return name;
}

/*
 * Show message in the textbox above contact form
 * @param String message
 * @param String type (Bootstrap alert types)
 */

function showContactAlert(message, type) {
	$(".missingFields > div").addClass('alert-' + type).html(message);
	$(".missingFields").addClass('shown');
}

function submitContactForm(data) {
	var empty = false;
	
	var dataSplit = data.split('&')
	console.log(dataSplit);
	for (var i = 0; i < dataSplit.length; i++) {
		console.log('loop');
		if(dataSplit[i].split('=')[1] == '') {
			empty = true;
		}
	}
	
	if(empty) {
		var message = 'Niet alle velden zijn correct ingevuld!';
		showContactAlert(message, 'danger');
	} else {
		/*
		 *		Send contact
		 */
		
		$.post(siteUrl + "/assets/ajax/contact_submit.php", data, function(responseCode) {
			responseCode = $.parseJSON(responseCode);
			if(responseCode['status'] == 'succesful') {
				var message = "<strong>" + responseCode['responseMessage'] + "</strong>";
				showContactAlert(message, 'success');
				$("#debug").html(responseCode['responseMessage']);
			} else {
				var message = "<strong>" + responseCode['responseMessage'] + "</strong>";
				showContactAlert(message, 'danger');
				$("#debug").html(responseCode['responseMessage']);
			}
		});
	}
}

$(document).ready(function() {
	$('span.contact-form').click(function() {
		var contactForm = $('body').append('<div>');
		contactForm.addClass('popup-contact-form');
	});
	
	$("#nav").click(function() {
		$("#nav button").toggleClass('is-active');
		$("#menu").toggleClass('is-active');
	});
	
	$("#menu-overlay-bottom").click(function() {
		$("#nav").click();
	})
	
	$("#menu .child").click(function() {
		if($(this).hasClass('available')) {
			var pageName = $(this).data('name');
			
			$("#menu .child").removeClass('active');
			$(this).addClass('active');
			
			$("#nav button").toggleClass('is-active');
			$("#menu").toggleClass('is-active');
			
			ajaxVisit(pageName, {}, '/' + pageName, true);			
		}
	});
	
	$("#submitBlockContactForm").click(function() { 
		var data = $("#block--contact form").serialize(); 
		submitContactForm(data); 	
	});
	
	$("#submitInlineContactForm").click(function() { 
		var data = $("#inline--contact form").serialize(); 
		submitContactForm(data);
	});
});