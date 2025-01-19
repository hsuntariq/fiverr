<style>
    .underlay-order {
        transition: all 0.2s;
        visibility: hidden;
    }

    .order-sidebar {
        transition: all 0.2s;
        transform: translateX(100%);
    }
</style>

<div style="background: rgba(0,0,0,0.5)" class="min-vh-100 w-100 underlay-order position-fixed top-0">
    <form action="/seller/place-order" method="POST" id="payment-form">
        @csrf
        <input type="hidden" name="quantity" class="quantity-input" value=""><br>
        <input type="hidden" name="price" class="price-input" value=""><br>
        <input type="hidden" name="order_from" value="{{ auth()->user()->id }}"><br>
        <input type="hidden" name="order_to" class="order-to" value=""><br>
        <input type="hidden" name="package" class="package" value=""><br>
        <input type="hidden" name="service" class="services" value=""><br>
        <input type="hidden" name="customer_name" value="{{ auth()->user()->name }}"><br>
        <input type="hidden" name="seller_name" class="seller_name" value=""><br>

        <!-- Order Sidebar -->
        <div class="col-xl-3 col-lg-4 order-sidebar min-vh-100 position-fixed end-0 top-0">
            <div class="card border-0 shadow min-vh-100">
                <div class="card-header bg-white d-flex justify-content-between align-items-center border-bottom">
                    <h5 class="mb-0">Order options</h5>
                    <button type="button" class="btn-close" aria-label="Close"></button>
                </div>
                <div class="card-body">
                    <div class="border p-3 mb-3 rounded">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h6 class="fw-bold package_name text-capitalize"></h6>
                                <p class="small text-muted mb-0">STARTUP 🚀 FACEBOOK ADS CAMPAIGN</p>
                                <p class="small text-muted mb-0">
                                    I will setup meta facebook ads campaign, instagram ads, and fb meta ads campaign.
                                </p>
                            </div>
                            <h6 class="fw-bold text-end">$<span class="package_price"></span></h6>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center">
                            <span>Gig Quantity</span>
                            <div class="d-flex align-items-center">
                                <button type="button" class="btn btn-outline-secondary btn-sm btn-dec">-</button>
                                <span class="mx-2 quantity"></span>

                                <button type="button" class="btn btn-outline-secondary btn-sm btn-inc">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="border p-3 rounded">
                        <h6 class="fw-bold">$<span class="package_price"></span></h6>
                        <p class="small mb-1">Single order</p>
                        <ul class="list-unstyled mb-2">
                            <li><i class="bi bi-box"></i> Basic package</li>
                            <li><i class="bi bi-clock"></i> 1-day delivery</li>
                            <li><i class="bi bi-arrow-repeat"></i> No revisions</li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer bg-white text-center">
                    <div id="card-element">
                        <!-- A Stripe Element will be inserted here. -->
                    </div>
                    <button type="button" class="btn btn-dark w-100 mt-3" id="submit-btn">Continue</button>
                    <p class="small text-muted mt-2">You won't be charged yet</p>
                </div>
            </div>
        </div>
    </form>
</div>
<x-jquery />
<script src="https://js.stripe.com/v3/"></script>
<script type="text/javascript">
    const stripe = Stripe(
        'pk_test_51PQ941HHkcsi40rJOka1QRX3FWPsmxd0eKbAPtsKdxhtW1ymfSqtgta1WCmLRavzaL4YpLnvcpkypSMrdlIpgfOW00Mj8RdFXq'
    ); // Replace with your Stripe publishable key


    document.getElementById('submit-btn').addEventListener('click', async () => {
        // Collect order data (you can get dynamic values here)
        let price = $('.price-input').val()

        const paymentData = {
            order_from: 'customer-id',
            order_to: 'seller-id',
            service: 'service-name',
            price: price, // Set price (replace with dynamic value)
            package: 'basic',
            quantity: 1
        };

        // Send order data to the backend to create the Checkout session
        const response = await fetch('/seller/place-order2', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                    'content')
            },
            body: JSON.stringify(paymentData)
        });

        const session = await response.json();
        console.log(session)
        if (session.id) {
            // Redirect to Stripe Checkout with the session ID
            const result = await stripe.redirectToCheckout({
                sessionId: session.id
            });

            if (result.error) {
                console.error(result.error.message);
            }
        } else {
            console.error('Error creating session:', session.error);
        }
    });
</script>
