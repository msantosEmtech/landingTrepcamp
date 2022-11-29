	var stripe = Stripe('pk_test_51K6jXeHe7k83l43GJq6Jx5uSkT2QcQYG8vvPYFoGlDIDFW00CER9fxTlnf1QlCh3hMJRgpBNcfzjVlOEh4usft1X00CORAeGgD');
	var elements = stripe.elements();
	// Custom Styling
	var style = {
		base: {
			iconColor: '#666EE8',
			color: '#32325d',
			lineHeight: '24px',
			/* fontFamily: 'Montserrat !important', */
			fontSmoothing: 'antialiased',
			fontSize: '16px',
			/* '::placeholder': {
				color: '#aab7c4'
			}, */
		},
		invalid: {
			color: '#fa755a',
			iconColor: '#fa755a'
		}
	};


	//* field card number 
	var cardNumber = elements.create('cardNumber',{
		style: style,
		placeholder: "1234 1234 1234 1234",
		showIcon: true
	});
	cardNumber.mount('#card-number');

	//* field card expire 
	var cardExpiry = elements.create('cardExpiry',{
		style: style,
		placeholder: "MM/AA"
	});
	cardExpiry.mount('#card-expiry');

	//* field card cvc 
	var cardCvc = elements.create('cardCvc',{
		style: style,
		placeholder: "CVC"
	});
	cardCvc.mount('#card-cvc');


	// Handle real-time validation errors from the card Element.
	cardNumber.addEventListener('change', function(event) {
		var displayError = document.getElementById('card-errors');
	if (event.error) {
			displayError.textContent = event.error.message;
		} else {
			displayError.textContent = '';
		}
	});


	var cardBrandToPfClass = {
		'visa': 'pf-visa',
		'mastercard': 'pf-mastercard',
	  	'amex': 'pf-american-express',
	  	'discover': 'pf-discover',
	  	'diners': 'pf-diners',
	  	'jcb': 'pf-jcb',
	  	'unknown': 'pf-credit-card',
	}
	
	function setBrandIcon(brand) {
		var brandIconElement = document.getElementById('brand-icon');
	  var pfClass = 'pf-credit-card';
	  if (brand in cardBrandToPfClass) {
		  pfClass = cardBrandToPfClass[brand];
	  }
	  for (var i = brandIconElement.classList.length - 1; i >= 0; i--) {
		  brandIconElement.classList.remove(brandIconElement.classList[i]);
	  }
	  brandIconElement.classList.add('pf');
	  brandIconElement.classList.add(pfClass);
	}
	
	cardNumber.on('change', function(event) {
		// Switch brand logo
		if (event.brand) {
		  setBrandIcon(event.brand);
	  }
	
		setOutcome(event);
	});


	// Handle form submission
	var triger = document.getElementById('buttonPayStripe');
	triger.addEventListener('click', function(event) {
		
		event.preventDefault();
	stripe.createToken(cardNumber).then(function(result) {
		//result.token = "";
			if (result.error) {
				// Inform the user if there was an error
				var errorElement = document.getElementById('card-errors');
				errorElement.textContent = result.error.message;
			} else {
				stripeTokenHandler(result.token);
			}
		});
	});

	// Send Stripe Token to Server
	function stripeTokenHandler(token) {
		let tokenHidden = document.getElementById('stripeToken');
		
		
	// Insert the token ID into the form so it gets submitted to the server '+identificador+'
		var form = document.getElementById('secTok');

		if (tokenHidden) {
			//console.log("Existe token anterior");
			let child = document.getElementById('stripeToken');
			form.removeChild(child);
		}else{//si no hay otro token anterior
			//console.log("no existe nada");
		}
		// Add Stripe Token to hidden input
		var hiddenInput = document.createElement('input');
		hiddenInput.setAttribute('type', 'hidden');
		hiddenInput.setAttribute('name', 'stripeToken');
		hiddenInput.setAttribute('id', 'stripeToken');
		hiddenInput.setAttribute('value', token.id);

		//mont result
		form.appendChild(hiddenInput);
	// Submit form
		sendPayStripe();
	}