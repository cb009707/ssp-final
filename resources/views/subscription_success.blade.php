


<link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">


<div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 rounded-lg">
    <p class="text-lg font-semibold">Order Status: Confirmed</p>
    <p>Your order has been successfully confirmed and is now being processed.</p>
</div>

@if($errors->has('msg'))
    <div class="alert alert-danger">

        {{ $errors->first('msg') }}
    </div>
@endif


<button type="button" class="w-full flex items-center justify-center w-1/2 px-5 py-2 text-sm text-gray-700 transition-colors duration-200 bg-white border rounded-lg gap-x-2 sm:w-auto dark:hover:bg-gray-800 dark:bg-gray-900 hover:bg-gray-100 dark:text-gray-200 dark:border-gray-700">
    <svg class="w-5 h-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
    </svg>
    <a href= '/' >Back to Home</a>
</button>
