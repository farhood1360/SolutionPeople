/* JavaScript Document */
/*
	Programmer: Farhood Rashidi
	Date: 06/10/2015
	Name: Farhood Studio
*/

$(document).ready(function()
{
	// navigation slide down
	$("#nav").navPlugin(
	{
		'itemWidth': 150,
		'itemHeight': 30,
		'navEffect': "slide",
		'speed': 250
	});
	
	// hide heading of pages
	$('h2').hide().fadeIn(3000);
	$('h3').hide().slideDown(3000);
	
	// focus first field
	$(':text:first').focus();
	
	// map plug-in 
	$('#map').goMap(
	{
		address: 'Vista Walk Ave, Hoffman Estates, IL-60169, USA',
		zoom: 15,
		scaleControl: true,
		maptype: 'ROADMAP'
	}); // end goMap
				
	$.goMap.createMarker(
	{
		address: 'Vista Walk Ave, Hoffman Estates, IL-60169, USA',
		title: 'Farhood Studio',
		html : {
			content: '<h2>Farhood Studio</h2><p>Hoffman Estates, IL</p>',
			popup: true
		}
	}); // end createMarker

	//disable credit card info
	$('#paypal').click(function()
	{
		$('#creditCard input').attr('disabled', true)
		.css('backgroundColor', '#CCC');
		$('#creditCard label').css('color','#BBB');
	}); // end click
	
	//enable credit card info	
	$('#visa, #masterCard').click(function()
	{
		$('#creditCard input').attr('disabled', false)
		.css('backgroundColor', '');
		$('#creditCard label').css('color','');
	}); // end click
	
	// validation form
	$('#contactForm').validate(
	{
		rules:
		{
			email:
			{
				required: true,
				email: true,
			},
			phone:
			{
				required: true,
				phone: true,
			}
		}, // end rules
		messages:
		{
			email:
			{
				required: "Please supply your e-mail address.",
				email: "This is not a valid e-mail address.",
			},
			phone:
			{
				required: "Please supply your phone number.",
				phone: "This is not a valid phone number.",
			}
		}, // end messages
		errorPlacement: function(error, element)
		{
			if(element.is(":radio") || element.is(":checkbox"))
			{
				error.appendTo(element.parent());
			}
			else
			{
				error.insertAfter(element);
			}
		} // end errorPlacement
	}); // end validate()
	
}); // end ready
