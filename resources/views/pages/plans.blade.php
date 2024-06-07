<x-app-layout>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@latest/dist/tailwind.min.css" rel="stylesheet">
    <section >
        <div class="container py-5">
            <div class="flex flex-wrap justify-center -mx-2">
                @foreach($plans as $plan)
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <div class="bg-white p-5 rounded-lg shadow">
                            <h1 class="h6 text-uppercase font-weight-bold mb-4">{{ $plan->name }}</h1>
                            <h2 class="h1 font-weight-bold">LKR{{ $plan->price }}<span class="text-small font-weight-normal ml-2">/ 3 months</span></h2>
                            <ul class="list-unstyled my-5 text-small text-left font-weight-normal">
                                @if($plan->name == 'Standard Plan')
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>All services included with service charge!!</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>Petrol Quota is Limited to 3 Litres per week</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>Temporary tyre change</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>One free oil change per month</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>One car wash for 3 months</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>One battery charge per month</li>
                                @elseif($plan->name == 'Premium Plan')
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>No service charge!!</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>Weekly Car wash</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>Petrol Quota is Limited to 5 Litres per week</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>Permanent Tyre Change</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>Up to Three free oil change for 3 months</li>
                                    <li class="mb-3">
                                        <i class="fa fa-check mr-2 text-primary"></i>One battery charge per week</li>
                                @endif
                            </ul>
                            {{--                                <a href="{{ route('plans.show', $plan->slug) }}" class="btn btn-primary btn-block shadow rounded-pill">Buy Now</a>--}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    <div id="payment-info" class="w-full max-w-lg mx-auto p-8">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <h2 class="text-lg font-medium mb-6">Vehicle Information</h2>
            <form method="post">
                {{@csrf_field()}}
                <div class="grid grid-cols-2 gap-6">

                    <div class="col-span-2">
                        <label for="car-model" class="block text-sm font-medium text-gray-700 mb-2">Enter Car Model</label>
                        <input type="text" name="car_model" id="car-model" placeholder="" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>



                    <div class="col-span-2">
                        <label for="chasis-number" class="block text-sm font-medium text-gray-700 mb-2">Enter Chasis Number</label>
                        <input type="text" name="chasis_number" id="chasis-number" placeholder="" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>


                    <div class="col-span-2">
                        <label for="chasis-number" class="block text-sm font-medium text-gray-700 mb-2">Enter Plate Number</label>
                        <input type="text" name="plate_number" id="chasis-number" placeholder="" class="w-full py-3 px-4 border border-gray-400 rounded-lg focus:outline-none focus:border-blue-500">
                    </div>
                </div>
                <br>
                           <fieldset class="relative z-0 w-full p-px mb-5">
                                  <legend class="block text-sm font-medium text-gray-700 mb-2 ">Choose a Plan</legend>
                                 <div class="block pt-3 pb-2 pl-3 space-x-4">
                                       <label>
                                           <input type="radio" name="plan" value="Standard" class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black">
                                          Standard
                                        </label>
                                      <label>
                                          <input type="radio" name="plan" value="Premium" class="mr-2 text-black border-2 border-gray-300 focus:border-gray-300 focus:ring-black">
                                         Premium
                                       </label>
                                  </div>
                </fieldset>

                <div class="mt-8">
                    <button type="submit" href="{{ route('plans.show', $plan->slug) }}" class="w-full bg-blue-600 hover:bg-blue-500 text-white font-medium py-3 rounded-lg focus:outline-none">Submit</button>
                </div>
            </form>



        </div>
    </div>
{{--    <div class="container">--}}


{{--    </div>--}}





    <script>

        function checkUserLoggedIn() {

            return true;
        }



    </script>


</x-app-layout>
