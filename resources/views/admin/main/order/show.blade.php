<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Invoice</title>

    <style>
        /* Simple reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            padding: 20px;
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: center;
        }

        .table th {
            background-color: #f4f4f4;
        }

        .list-group {
            list-style: none;
            padding: 0;
            margin-bottom: 20px;
        }

        .list-group-item {
            padding: 10px;
            border: 1px solid #ddd;
        }

        .list-group-item:not(:last-child) {
            border-bottom: 0;
        }

        .total {
            font-weight: bold;
            background-color: #f4f4f4;
        }

        .text-center {
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            text-align: center;
            text-decoration: none;
            background-color: #007bff;
            color: white;
            border-radius: 5px;
            margin-top: 10px;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>

    <h2>Order Details</h2>

    <!-- Order Summary Table -->
    <table class="table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $orderItem)
                <tr>
                    <td>{{ $orderItem->product->name }}</td>
                    <td>{{ $orderItem->product->price }}</td>
                    <td>{{ $orderItem->quantity }}</td>
                    <td>{{ number_format($orderItem->product->price * $orderItem->quantity, 2) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Summary & Total -->
    <ul class="list-group">
        <li class="list-group-item">
            Sub-Total
            <span style="float:right;">{{ number_format($order->total_amount, 2) }}</span>
        </li>
        <li class="list-group-item">
            Delivery Charges
            <span style="float:right;">00.00</span>
        </li>
        <li class="list-group-item total">
            Total Amount
            <span style="float:right;">{{ number_format($order->total_amount, 2) }}</span>
        </li>
    </ul>

    <div class="text-center">
        <a href="{{ route('admin.orders.index') }}" class="btn" style="margin-right: 5px;">Back</a>
        <a href="{{ route('admin.export.section', $order->id) }}" class="btn">Export as PDF</a>
    </div>

</body>

</html>