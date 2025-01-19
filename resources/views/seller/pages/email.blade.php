<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }

        .email-container {
            width: 100%;
            background-color: #ffffff;
            padding: 20px;
            margin: 0 auto;
            max-width: 600px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            font-size: 24px;
        }

        h2 {
            color: #4CAF50;
            font-size: 20px;
        }

        .order-details {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .order-details th,
        .order-details td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .order-details th {
            background-color: #f4f4f4;
        }

        .order-summary {
            background-color: #f8f8f8;
            padding: 10px;
            margin-top: 20px;
            border-radius: 5px;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            color: #aaa;
            margin-top: 30px;
        }

        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }

        @media screen and (max-width: 600px) {
            .email-container {
                width: 100%;
                padding: 15px;
            }

            .order-details td,
            .order-details th {
                padding: 8px;
            }
        }
    </style>
</head>

<body>

    <div class="email-container">
        <h1>Thank you for your order, [{{ $mailData['customer_name'] }}]!</h1>
        <p>We have successfully received your order. Below are the details of your purchase:</p>

        <h2>Order #{{ $mailData['id'] }}</h2>

        <table class="order-details">
            <tr>
                <th>Product</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Package</th>
            </tr>

            <tr>
                <td> {{ $mailData['service'] }} </td>
                <td> {{ $mailData['quantity'] }} </td>
                <td> {{ $mailData['price'] }} </td>
                <td> {{ $mailData['package'] }} </td>
            </tr>


        </table>

        <div class="order-summary">
            <p><strong>Total Price: </strong>${{ $mailData['price'] }}</p>
            <p><strong>Payment Method: </strong>Credit Card</p>
            <p><strong>Shipping Address:</strong><br>
                1234 Elm Street<br>
                Some City, State 12345<br>
                Country
            </p>
        </div>

        <a href="#" class="button">Track Your Order</a>

        <div class="footer">
            <p>&copy; 2025 Your Company. All rights reserved.</p>
            <p>If you have any questions, please contact us at <a
                    href="mailto:support@yourcompany.com">support@yourcompany.com</a></p>
        </div>
    </div>

</body>

</html>
