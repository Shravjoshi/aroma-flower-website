<form action="https://www.example.com/payment/success/" method="POST">
	<script src="https://checkout.razorpay.com/v1/checkout.js"   

	data-key="rzp_test_lwMgLSp0FB0w3c" // Enter the Key ID generated from the Dashboard    
	data-amount="50000" // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise or INR 500.    
	data-currency="INR"    
	data-order_id="order_CgmcjRh9ti2lP7"//This is a sample Order ID. Create an Order using Orders API. (https://razorpay.com/docs/payment-gateway/orders/integration/#step-1-create-an-order)    
	data-buttontext="Pay with Razorpay"    
	data-name="Acme Corp"    
	data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"    
	data-image="https://example.com/your_logo.jpg"    
	data-prefill.name="Gaurav Kumar"    
	data-prefill.email="gaurav.kumar@example.com"    
	data-prefill.contact="9999999999"    
	data-theme.color="#F37254">
		
	</script>
	<input type="hidden" custom="Hidden Element" name="hidden">
	</form>