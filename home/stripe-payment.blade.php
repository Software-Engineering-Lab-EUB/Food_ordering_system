<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends Zone</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center;">Stripe Payment</h1>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default credit-card-box">
                    <div class="panel-heading display-table">
                        <h3 class="panel-title">Payment Details</h3>
                    </div>
                    <div class="panel-body">
                        <!-- Include Stripe.js v3 -->
                        <script src="https://js.stripe.com/v3/"></script>
                        <form id="payment-form" method="POST" action="{{ route('stripe.payment.process') }}">
                            @csrf
                        
                            <div class="form-group">
                                <label for="cardholder-name">Name on Card</label>
                                <input type="text" id="cardholder-name" name="cardholder_name" required class="form-control" placeholder="Puspita ">
                            </div>
                        
                            <div class="form-group">
                                <label for="card-element">Credit or Debit Card</label>
                                <div id="card-element" class="form-control" style="padding: 10px 12px;"></div>
                            </div>
                        
                            <div class="form-group">
                                <label for="recharge-amount">Recharge Amount ($)</label>
                                <input type="number" value="{{ $intent->amount/100 }}" name="recharge_amount" id="recharge-amount" class="form-control" readonly />
                            </div>
                        
                            <button id="card-button" class="btn btn-success btn-block" type="button" data-secret="{{ $clientSecret }}">
                                💳 Pay Now
                            </button>
                        
                            <div id="card-errors" role="alert" class="text-danger mt-2"></div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    const stripe = Stripe("{{ env('STRIPE_KEY') }}");
    const elements = stripe.elements();
    const cardElement = elements.create('card');
    cardElement.mount('#card-element');

    const cardButton = document.getElementById('card-button');
    const clientSecret = cardButton.dataset.secret;
    const form = document.getElementById('payment-form');
    const cardHolderName = document.getElementById('cardholder-name');

    cardButton.addEventListener('click', async (e) => {
        e.preventDefault();

        const { paymentIntent, error } = await stripe.confirmCardPayment(clientSecret, {
            payment_method: {
                card: cardElement,
                billing_details: {
                    name: cardHolderName.value
                }
            }
        });

        if (error) {
            document.getElementById('card-errors').textContent = error.message;
        } else {
            // Append PaymentIntent ID to form
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'payment_intent_id';
            hiddenInput.value = paymentIntent.id;
            form.appendChild(hiddenInput);

            form.submit();
        }
    });
</script>
</body>
</html>
