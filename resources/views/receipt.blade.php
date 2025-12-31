<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
            color: #333;
            font-size: 14px;
            line-height: 1.6;
        }
        .receipt-container {
            width: 100%;
            max-width: 800px;
            margin: 20px auto;
            padding: 30px;
            background: #fff;
            border: 1px solid #eee;
            border-radius: 8px;
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        .header h1 {
            font-size: 28px;
            color: #b91c1c; /* Red */
            margin: 0;
        }
        .header p {
            color: #666;
            font-size: 14px;
            margin: 5px 0 0;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        .details-table th, .details-table td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        .details-table th {
            background-color: #f9fafb; /* Light Gray */
            font-weight: bold;
            width: 35%;
        }
        .total-row td {
            font-size: 16px;
            font-weight: bold;
            background-color: #f9fafb;
        }
        .total-row .total-amount {
            color: #b91c1c; /* Red */
            font-size: 18px;
        }
        .footer {
            text-align: center;
            margin-top: 40px;
            font-size: 12px;
            color: #888;
        }
        .footer p {
            margin: 5px 0;
        }
        .footer a {
            color: #2563eb; /* Blue */
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="receipt-container">
        <div class="header">
            <h1>Booking Receipt</h1>
            <p>Thank you for your purchase!</p>
        </div>

        <table class="details-table">
            <tr>
                <th>Booking ID</th>
                <td>{{ $booking->id }}</td>
            </tr>
            <tr>
                <th>Theatre</th>
                <td>{{ $booking->theatre_name }}</td>
            </tr>
            <tr>
                <th>Date</th>
                <td>{{ $booking->booking_date }}</td>
            </tr>
            <tr>
                <th>Time Slot</th>
                <td>{{ $booking->slot }}</td>
            </tr>
            <tr>
                <th>Purpose</th>
                <td>{{ $booking->purpose }}</td>
            </tr>
            @if($booking->addon)
            <tr>
                <th>Add-ons</th>
                <td>{{ $booking->addon }}</td>
            </tr>
            @endif
             <tr>
                <th>Payment ID</th>
                <td>{{ $booking->razorpay_payment_id }}</td>
            </tr>
             <tr>
                <th>Order ID</th>
                <td>{{ $booking->razorpay_order_id }}</td>
            </tr>
            <tr class="total-row">
                <td>Total Paid</td>
                <td class="total-amount">₹{{ number_format($booking->total_price, 2) }}</td>
            </tr>
        </table>

        <div class="footer">
            <p>This is a computer-generated receipt and does not require a signature.</p>
            <p>
                Private Popcorn | <a href="mailto:support@privatepopcorn.com">support@privatepopcorn.com</a>
            </p>
        </div>
    </div>
</body>
</html>

