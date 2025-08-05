<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate to {{ $teacherName }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <body class="bg-gray-100 flex items-center justify-center min-h-screen">
        <div class="bg-white p-6 rounded-2xl shadow-lg max-w-lg text-center">
            <h1 class="text-2xl font-bold mb-4">Support {{ $teacherName }}</h1>
            <p class="mb-4 text-gray-600">
                Your donation helps {{ $teacherName }} provide better resources for students.</p>

                <!-- PayPal Donate Button -->
                 <form action="https://www.paypal.com/donate" method="post" target="_blank" class="mb-4">
                    <input type="hidden" name="business" value="{{ $paypalEmail }}">
                    <input type="hidden" name="currency_code" value="USD">
                    <input type="hidden" name="item_name" value="Donation for {{ $teacherName }}">
                    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        Donate via PayPal
                 </button>
                 </form>

                 <!-- Amazon Wishlist  -->
                  <a href="{{ $wishlistUrl }}" target="_blank" class="bg-yellow-600 text-white px-4 py-2 rounded-lg hover:bg-yellow-600">
                    View Amazon Wishlist
                 </a>
                 </div>
</body>
</html>