<!DOCTYPE html>
<html>
<head>
  <title>Tela</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
  <div class="container mx-auto px-4 py-8">
    <div class="bg-gray-100 py-16">
      <div class="flex flex-wrap justify-center gap-4 p-4">
        <h1 class="bg-slate-100 shadow-b sticky top-0 w-full p-4 text-center text-lg">
          QRCode
        </h1>
      </div>
      <div class="flex flex-wrap justify-center gap-4 p-4">
        <a href="qrcode" class="flex sm:inline-flex justify-center items-center bg-gradient-to-tr from-indigo-500 to-purple-400 hover:from-indigo-600 hover:to-purple-500 active:from-indigo-700 active:to-purple-600 focus-visible:ring ring-indigo-300 text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
          QRCode
        </a>

        <a href="/images" class="flex sm:inline-flex justify-center items-center bg-gradient-to-tr from-pink-500 to-red-400 hover:from-pink-600 hover:to-red-500 active:from-pink-700 active:to-red-600 focus-visible:ring ring-pink-300 text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
          images Json
        </a>

        <a href="/link-image-to-user-form" class="flex sm:inline-flex justify-center items-center bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus-visible:ring ring-blue-300 text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
          link-image-to-user
        </a>

        <a href="/lists" class="flex sm:inline-flex justify-center items-center bg-green-500 hover:bg-green-600 active:bg-green-700 focus-visible:ring ring-green-300 text-white font-semibold text-center rounded-md outline-none transition duration-100 px-5 py-2">
          Lists
        </a>


  </div>
  <hr>
  <div class="flex flex-col items-center gap-4 p-4">
    <div class="flex flex-col items-center">
      <input type="text" id="orderNumber" placeholder="Enter Order Number" class="mb-2 px-4 py-2 border rounded-md outline-none focus:ring ring-yellow-300">
      <button type="button" onclick="redirectToQRCode()" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 focus-visible:ring ring-yellow-300 text-white font-semibold text-center rounded-md outline-none transition duration-100">
        Go to QRCode
      </button>
    </div>
    <div class="flex flex-col items-center">
      <input type="text" id="orderNumberOrder" placeholder="Enter Order Number" class="mb-2 px-4 py-2 border rounded-md outline-none focus:ring ring-yellow-300">
      <button type="button" onclick="redirectToOrder()" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 focus-visible:ring ring-yellow-300 text-white font-semibold text-center rounded-md outline-none transition duration-100">
        Go to Order
      </button>
    </div>
    <div class="flex flex-col items-center">
      <input type="text" id="id" placeholder="Enter Image Number" class="mb-2 px-4 py-2 border rounded-md outline-none focus:ring ring-yellow-300">
      <button type="button" onclick="redirectToImages()" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 focus-visible:ring ring-yellow-300 text-white font-semibold text-center rounded-md outline-none transition duration-100">
        Go to Images
      </button>
    </div>
  </div>
    </div>
  </div>
  <script>
    function redirectToQRCode() {
      const orderNumber = document.getElementById('orderNumber').value;
      if (orderNumber) {
        window.location.href = `/qrcode/${orderNumber}`;
      } else {
        alert('Please enter an order number');
      }
    }
    function redirectToOrder() {
      const orderNumber = document.getElementById('orderNumber').value;
      if (orderNumber) {
        window.location.href = `order/${orderNumber}`;
      } else {
        alert('Please enter an order number');
      }
    }
    function redirectToImages() {
      const id = document.getElementById('id').value;
      if (id) {
        window.location.href = `images/${id}`;
      } else {
        alert('Please enter an order number');
      }
    }

  </script>
</body>
</html>
