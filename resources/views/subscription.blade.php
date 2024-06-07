<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

<div class="card-header text-center pt-10 text-2xl font-bold">
    You will be charged LKR{{ number_format($plan->price, 2) }} for {{ $plan->name }}
</div>

<div class="max-w-md mx-auto bg-gray-100 shadow-md rounded-md overflow-hidden mt-16">
        <div class="bg-blue-600 text-white p-4 flex justify-between">
            <div class="font-bold text-lg">Credit Card Payment</div>
            <div class="text-lg"><i class="fab fa-cc-visa"></i></div>
        </div>
        <form id="payment-form" action="{{ route('subscription.create') }}" method="POST" class="p-6">
            @csrf
            <input type="hidden" name="plan" value="{{ $plan->id }}">
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="card-holder-name">
                    Name on Card
                </label>
                <input type="text" name="name" id="card-holder-name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="John Doe">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 font-bold mb-2" for="card-element">
                    Card Details
                </label>
                <div id="card-element" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight"></div>
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded font-bold hover:bg-blue-700 focus:outline-none focus:shadow-outline" id="card-button" data-secret="{{ $intent->client_secret }}">
                    Purchase
                </button>
            </div>
        </form>
    </div>

    <script src="https://js.stripe.com/v3/"></script>
    <script>
        const stripe = Stripe('{{ env('STRIPE_KEY') }}');
        const elements = stripe.elements();
        const cardElement = elements.create('card', {style: { base: { iconColor: '#666EE8', color: '#31325F', fontWeight: '300', fontFamily: '"Helvetica Neue", Helvetica, sans-serif', fontSize: '16px', '::placeholder': { color: '#CFD7E0' } } } });
        cardElement.mount('#card-element');

        const form = document.getElementById('payment-form');
        const cardBtn = document.getElementById('card-button');
        const cardHolderName = document.getElementById('card-holder-name');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            cardBtn.disabled = true;
            const { setupIntent, error } = await stripe.confirmCardSetup(
                cardBtn.dataset.secret, {
                    payment_method: {
                        card: cardElement,
                        billing_details: { name: cardHolderName.value }
                    }
                }
            );

            if (error) {
                cardBtn.disabled = false;
                console.log(error);
            } else {
                let token = document.createElement('input');
                token.setAttribute('type', 'hidden');
                token.setAttribute('name', 'token');
                token.setAttribute('value', setupIntent.payment_method);
                form.appendChild(token);
                form.submit();
            }
        });
    </script>

