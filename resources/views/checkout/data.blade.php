<!-- Content -->
<div class="container">
        @foreach($order as $item)
                <div class="row">
                    {{$item->name}}
                    {{$item->qty}}
                    {{$item->price}}
                </div>
        @endforeach
            <div>Subtotal: {{$subtotal}}</div>
            <div>Total: {{$total}}</div>
            <label for="card-element">
                Credit or debit card
            </label>
            <div id="card-element">
                <!-- A Stripe Element will be inserted here. -->
            </div>
            <!-- Used to display form errors. -->
            <div id="card-errors" role="alert"></div>
            <form action="{{route('stripe')}}" method="post" id="payment-form">
                {{ csrf_field() }}
                <button>Submit Payment</button>
            </form>
            <script src="https://js.stripe.com/v3/"></script>
            <script type="text/javascript">
                var stripe = Stripe('pk_test_Dl0S2sVWmOtqpbgdhotZqlgn');
                debugger;
                var elements = stripe.elements();
                // Custom styling can be passed to options when creating an Element.
                // (Note that this demo uses a wider set of styles than the guide below.)
                var style = {
                    base: {
                        color: '#32325d',
                        lineHeight: '18px',
                        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                        fontSmoothing: 'antialiased',
                        fontSize: '16px',
                        '::placeholder': {
                            color: '#aab7c4'
                        }
                    },
                    invalid: {
                        color: '#fa755a',
                        iconColor: '#fa755a'
                    }
                };
                // Create an instance of the card Element.
                var card = elements.create('card', {style: style});
                // Add an instance of the card Element into the `card-element` <div>.
                card.mount('#card-element');
                var form = document.getElementById('payment-form');
                form.addEventListener('submit', function(event) {
                    event.preventDefault();
                    stripe.createToken(card).then(function (result) {
                        if (result.error) {
                            // Inform the user if there was an error.
                            var errorElement = document.getElementById('card-errors');
                            errorElement.textContent = result.error.message;
                        } else {
                            // Send the token to your server.
                            stripeTokenHandler(result.token);
                        }
                    });
                });
                function stripeTokenHandler(token) {
                    // Insert the token ID into the form so it gets submitted to the server
                    var form = document.getElementById('payment-form');
                    var hiddenInput = document.createElement('input');
                    hiddenInput.setAttribute('type', 'hidden');
                    hiddenInput.setAttribute('name', 'stripeToken');
                    hiddenInput.setAttribute('value', token.id);
                    form.appendChild(hiddenInput);
                    // Submit the form
                    debugger;
                    form.submit();
                }
            </script>

</div>



