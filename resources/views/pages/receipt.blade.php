<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Receipt</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-blue-50 flex items-center justify-center h-screen">
<div class="bg-white p-8 rounded-lg shadow-lg max-w-lg w-full">
    <h1 class="text-2xl font-bold text-center mb-4 text-blue-600">Booking Receipt</h1>
    <p class="text-gray-800 mb-2"><strong>Thank you for your booking, {{ $booking->full_name }}!</strong></p>
    <div class="space-y-2 mt-4 text-gray-700">
        <p><strong>Booking ID:</strong> {{ $booking->id }}</p>
        <p><strong>Service Type:</strong> {{ $booking->type }}</p>
        <p><strong>Payment Method:</strong> {{ $booking->payment }}</p>
        <p><strong>Services Requested:</strong> {{ $booking->service }}</p>
        <p><strong>Total Amount:</strong> [Calculate based on services]</p>
        <p><strong>Address:</strong> {{ $booking->address }}</p>
        <p><strong>Vehicle Plate:</strong> {{ $booking->plate }}</p>
        <p><strong>Discount Code:</strong> {{ $booking->discount }}</p>
    </div>
    <div class="mt-6 text-center">
        <a href="/" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            Back to Home
        </a>
    </div>
</div>
</body>
</html>
