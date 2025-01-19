<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class OrderController extends Controller
{
    public function placeOrder(Request $req)
    {


        try {
            // Validate the order data
            $formFields = $req->validate([
                "order_from" => 'required',
                "order_to" => 'required',
                "service" => 'required',
                "price" => 'required',
                "package" => 'required',
                "quantity" => 'required',
            ]);

            // Create the order in your database
            $order = Order::create($formFields);
        } catch (\Throwable $th) {
        }
    }




    public function order2(Request $req)
    {
        try {
            // Set your Stripe secret key
            Stripe::setApiKey('sk_test_51PQ941HHkcsi40rJZBFV1EPksfiaLxZgBZm1nPc0s9Zw6dS36e90HE1LNr2pEGJDXo0YhoNJQcPbcdKqkKd3TZhl00NTeVWyAk');
            // Calculate the price in cents (Stripe expects amounts in cents)
            $amount = $req->input('price') * 100; // Price in cents

            // Create a Stripe Checkout Session
            $session = Session::create([
                'payment_method_types' => ['card'], // Payment method (card in this case)
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'usd',  // Currency to use (e.g. USD)
                            'product_data' => [
                                'name' => 'Service Payment',  // Item description

                            ],
                            'unit_amount' => $amount,  // The amount (in cents)
                        ],
                        'quantity' => $req->input('quantity'),  // Set quantity to 1
                    ],
                ],
                'mode' => 'payment',  // Use 'payment' mode for one-time payments
                'success_url' => route('payment.success') . '?session_id={CHECKOUT_SESSION_ID}', // Success URL
                'cancel_url' => route('payment.cancel'), // Cancel URL
            ]);

            // Return the session ID to the frontend
            return response()->json([
                'id' => $session->id,
            ]);
        } catch (\Throwable $th) {
            // Log the error for debugging
            return response()->json($th->getMessage());

            // Return a 500 error response
            return response()->json([
                'error' => 'An error occurred while creating the payment session.',
            ], 500);
        }
    }
}
