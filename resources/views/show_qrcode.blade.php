<!DOCTYPE html>
<html>
<head>
    <title>QR Code for Order</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="col-md-2 mx-auto">
        <p class="mb-2 font-bold">Order Number: {{ $orderNumber }}</p>
        <a href="{{ env('APP_URL') . '/order/' . $orderNumber }}" id="container" class="inline-block">
            {!! $qrCode !!}
        </a>
        <br/>
    </div>
</body>
</html>
