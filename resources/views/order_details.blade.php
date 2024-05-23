<!DOCTYPE html>
<html>
<head>
  <title>Order Details</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <div class="container mx-auto px-4 py-8">
    <h1 class="text-3xl font-bold mb-4">Order Details</h1>
    <div class="flex flex-col space-y-2">
      <p class="font-medium">Order Number: <span class="text-gray-800">{{ $order->order_number }}</span></p>
      <p class="font-medium">User Name: <span class="text-gray-800">{{ $order->user->name }}</span></p>
      <p class="font-medium">Image:</p>
      <img src="{{ asset('storage/' . $order->image->path) }}" alt="Order Image" class="w-full max-h-60 object-cover rounded-lg">
    </div>
  </div>
</body>
</html>
